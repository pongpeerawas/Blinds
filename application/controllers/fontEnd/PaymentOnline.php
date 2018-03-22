<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PaymentOnline extends CI_Controller {

	public function __construct ()
	{
		parent::__construct();
		if($this->session->userdata('group')!=	('2') )
		{
			$this->session->set_flashdata('error','<div class="alert alert-warning"><center><strong>กรุณาสมัครสมาชิก</strong></center></div>');
			redirect('fontEnd/Login');
		}


	}
  public function index(){


    $contents['row']          = $this->Customer_model->customer();

    $contents['cart_session'] = $this->session->userdata('cart_session');
    $template['content']    = $this->load->view('fontEnd/PayPal',$contents,TRUE);



    $this->load->view('fontEnd/Template/Header');
    $this->load->view('fontEnd/Template/Sidebar',$template);
    $this->load->view('fontEnd/Template/Footer');

  }
  public function PayOnline(){


    $contents['row']          = $this->Customer_model->customer();

    $contents['cart_session'] = $this->session->userdata('cart_session');
    $template['content']    = $this->load->view('fontEnd/PayPal',$contents,TRUE);


    $id = $this->uri->segment(3);
    $query = $this->Order_model->get_order($id);
    $template['pay'] = $query->result();


    $this->load->view('fontEnd/Template/Header');
    $this->load->view('fontEnd/Template/Sidebar',$template);
    $this->load->view('fontEnd/Template/Footer');

  }
  public function SavePay()
  {
        $id = $this->uri->segment(3);
        $query = $this->Order_model->get_order($id);

      $savedata = array
      (
        'Order_Id' 	  =>   $query,
        'Pay_Bank'			=> 	 'PayPal',
        'Pay_amount'		=> 	 '1',

      );

      $this->db->insert('payonline',$data);

      $updatedata = array
      (
        'Order_Paystatus' 	  =>   'ชำระเงินแล้ว',

      );

      $this->db->update('orders',$updatedata);


		  redirect('fontEnd/single_history');


  }
	}
