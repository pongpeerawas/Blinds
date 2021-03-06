<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

require_once(APPPATH . 'libraries/paypal-php-sdk/paypal/rest-api-sdk-php/sample/bootstrap.php'); // require paypal files


use PayPal\Api\ItemList;
use PayPal\Api\Payment;
use PayPal\Api\RedirectUrls;
use PayPal\Api\Amount;
use PayPal\Api\PaymentExecution;
use PayPal\Api\RefundRequest;
use PayPal\Api\Sale;

class Paypal extends CI_Controller
{
  public $_api_context;

  function  __construct()
  {
    parent::__construct();
    $this->load->model('paypal_model', 'paypal');
    // paypal credentials
    $this->config->load('paypal');

    $this->_api_context = new \PayPal\Rest\ApiContext(
      new \PayPal\Auth\OAuthTokenCredential(
        $this->config->item('client_id'), $this->config->item('secret')
        )
      );
    }

    function index(){

      $id = $this->uri->segment(3);
      $query = $this->Order_model->get_order($id);
      $template['cart_session'] = $this->session->userdata('cart_session');

      $template['pay'] = $query->result();



      $query = $this->Order_model->get_order_list($id);
      $data['orderlist'] = $query->result();

      $query = $this->Order_model->get_order_shipping($id);
      $data['shipping'] = $query->result();

      $query = $this->Order_model->get_order($id);
      $data['sumprice'] = $query->result();

      $this->load->view('fontEnd/Template/Header',$template);
      $this->load->view('content/payment_credit_form',$data);
      $this->load->view('fontEnd/Template/Footer');

    }


    function create_payment_with_paypal()
    {
      // setup PayPal api context
      $this->_api_context->setConfig($this->config->item('settings'));
      // ### Payer
      // A resource representing a Payer that funds a payment
      // For direct credit card payments, set payment method
      // to 'credit_card' and add an array of funding instruments.

      $payer['payment_method'] = 'paypal';

      // ### Itemized information
      // (Optional) Lets you specify item wise
      // information
      $item1["name"] = $this->input->post('item_name');
      $item1["sku"] = $this->input->post('item_number');  // Similar to `item_number` in Classic API
      $item1["description"] = $this->input->post('item_description');
      $item1["currency"] ="THB";
      $item1["quantity"] =1;
      $item1["price"] = $this->input->post('item_price');

      $itemList = new ItemList();
      $itemList->setItems(array($item1));

      // ### Additional payment details
      // Use this optional field to set additional
      // payment information such as tax, shipping
      // charges etc.
      $details['tax'] = $this->input->post('details_tax');
      $details['subtotal'] = $this->input->post('details_subtotal');
      // $details['order_id'] = $this->input->post('Order_Id');

      // ### Amount
      // Lets you specify a payment amount.
      // You can also specify additional details
      // such as shipping, tax.
      $amount['currency'] = "THB";
      $amount['total'] = $details['tax'] + $details['subtotal'];
      $amount['details'] = $details;
      // ### Transaction
      // A transaction defines the contract of a
      // payment - what is the payment for and who
      // is fulfilling it.

      $transaction['description'] ='Payment description';
      $transaction['amount'] = $amount;
      // uniqid();
      $transaction['invoice_number'] =  $this->input->post('Order_Id');

      $transaction['item_list'] = $itemList;

      // ### Redirect urls
      // Set the urls that the buyer must be redirected to after
      // payment approval/ cancellation.
      // $item_name['item'] = $this->input->post('item_name');

      $baseUrl = base_url();
      $redirectUrls = new RedirectUrls();
      $redirectUrls->setReturnUrl($baseUrl.'index.php/paypal/getPaymentStatus')
      ->setCancelUrl($baseUrl."index.php/paypal/getPaymentStatus");

      // ### Payment
      // A Payment Resource; create one using
      // the above types and intent set to sale 'sale'
      $payment = new Payment();
      $payment->setIntent("sale")
      ->setPayer($payer)
      ->setRedirectUrls($redirectUrls)
      ->setTransactions(array($transaction));

      $payment->create($this->_api_context);
      //
      // $id = $this->input->post('item_name');
      //
      // $updatedata = array
      // (
      //   'Order_Id'  =>  $id,
      //   'Order_Paystatus' 	  =>   'ชำระเงินแล้ว',
      // );
      // $this->Paypal_model->update_order_status($updatedata);
      //
      // $updatedatapay = array
      // (
      //
      //   'Order_PayConStatus	' 	  =>   'แจ้งชำระแล้ว',
      // );
      // $this->db->update('orders',$updatedatapay);

      try {

      } catch (Exception $ex) {
        // NOTE: PLEASE DO NOT USE RESULTPRINTER CLASS IN YOUR ORIGINAL CODE. FOR SAMPLE ONLY
        ResultPrinter::printError("Created Payment Using PayPal. Please visit the URL to Approve.", "Payment", null, $ex);
        exit(1);
      }
      foreach($payment->getLinks() as $link) {
        if($link->getRel() == 'approval_url') {
          $redirect_url = $link->getHref();
          break;
        }
      }

      if(isset($redirect_url)) {
        /** redirect to paypal **/
        redirect($redirect_url);
      }


      $this->session->set_flashdata('success_msg','Unknown error occurred');
      redirect('paypal/index');

    }


    public function getPaymentStatus($item_name)
    {

      // paypal credentials

      /** Get the payment ID before session clear **/
      $payment_id = $this->input->get("paymentId") ;
      $PayerID = $this->input->get("PayerID") ;
      $token = $this->input->get("token") ;
      /** clear the session payment ID **/

      if (empty($PayerID) || empty($token)) {
        $this->session->set_flashdata('success_msg','Payment failed');
        redirect('paypal/index');
      }

      $payment = Payment::get($payment_id,$this->_api_context);


      /** PaymentExecution object includes information necessary **/
      /** to execute a PayPal account payment. **/
      /** The payer_id is added to the request query parameters **/
      /** when the user is redirected from paypal back to your site **/
      $execution = new PaymentExecution();
      $execution->setPayerId($this->input->get('PayerID'));

      /**Execute the payment **/
      $result = $payment->execute($execution,$this->_api_context);



      //  DEBUG RESULT, remove it later **/

      $trans = $result->getTransactions();

      // item info
      $Subtotal = $trans[0]->getAmount()->getDetails()->getSubtotal();
      $Tax = $trans[0]->getAmount()->getDetails()->getTax();

      $payer = $result->getPayer();
      // payer info //
      $PaymentMethod =$payer->getPaymentMethod();
      $PayerStatus =$payer->getStatus();
      $PayerMail =$payer->getPayerInfo()->getEmail();

      $relatedResources = $trans[0]->getRelatedResources();
      $sale = $relatedResources[0]->getSale();
      // sale info //

      $saleId =   $trans[0]->getInvoiceNumber();


      // $saleId = $sale->getId();
      $CreateTime = $sale->getCreateTime();
      $UpdateTime = $sale->getUpdateTime();
      $State = $sale->getState();
      $Total = $sale->getAmount()->getTotal();
      /** it's all right **/
      /** Here Write your database logic like that insert record or value in database if you want **/
      $this->paypal->create($Subtotal,$PaymentMethod,$PayerStatus,$PayerMail,$CreateTime,$UpdateTime,$State,$saleId);

      $updatedata = array
      (
        'Order_Id'  =>  $saleId,
        'Order_Paystatus' 	  =>   'ชำระเงินแล้ว',
        'Order_PayConStatus	' 	  =>   'แจ้งชำระแล้ว',

      );
      $this->Paypal_model->update_order_status($updatedata);
      // $this->db->update('orders',$updatedata);
      $this->session->set_flashdata('success_msg','Payment success');
      // $template['cart_session'] = $this->session->userdata('cart_session');
      //
      redirect('paypal/success');






      $this->session->set_flashdata('success_msg','Payment failed');
      redirect('paypal/cancel',$template);
    }

    // function update_status(){
    //
    //   $updatedata = array
    //   (
    //     'Order_Id'  =>  $item_name,
    //     'Order_Paystatus' 	  =>   'ชำระเงินแล้ว',
    //   );
    //   $this->Paypal_model->update_order_status($updatedata);
    //   redirect('paypal/success');
    //
    // }
    function success(){
      $this->load->view("content/success");
    }
    function cancel(){
      $this->load->view("content/cancel");
    }

    function load_refund_form(){
      $this->load->view('content/Refund_payment_form');
    }

    function refund_payment(){
      $refund_amount = $this->input->post('refund_amount');
      $saleId = $this->input->post('sale_id');
      $paymentValue =  (string) round($refund_amount,2); ;

      // ### Refund amount
      // Includes both the refunded amount (to Payer)
      // and refunded fee (to Payee). Use the $amt->details
      // field to mention fees refund details.
      $amt = new Amount();
      $amt->setCurrency('THB')
      ->setTotal($paymentValue);

      // ### Refund object
      $refundRequest = new RefundRequest();
      $refundRequest->setAmount($amt);

      // ###Sale
      // A sale transaction.
      // Create a Sale object with the
      // given sale transaction id.
      $sale = new Sale();
      $sale->setId($saleId);
      try {
        // Refund the sale
        // (See bootstrap.php for more on `ApiContext`)
        $refundedSale = $sale->refundSale($refundRequest, $this->_api_context);
      } catch (Exception $ex) {
        // NOTE: PLEASE DO NOT USE RESULTPRINTER CLASS IN YOUR ORIGINAL CODE. FOR SAMPLE ONLY
        ResultPrinter::printError("Refund Sale", "Sale", null, $refundRequest, $ex);
        exit(1);
      }

      // NOTE: PLEASE DO NOT USE RESULTPRINTER CLASS IN YOUR ORIGINAL CODE. FOR SAMPLE ONLY
      ResultPrinter::printResult("Refund Sale", "Sale", $refundedSale->getId(), $refundRequest, $refundedSale);

      return $refundedSale;
    }
  }
