<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PaymentConfirm extends CI_Controller {

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
    $template['content']    = $this->load->view('fontEnd/Paymentcon',$contents,TRUE);

    $this->load->view('fontEnd/Template/Header');
    $this->load->view('fontEnd/Template/Sidebar',$template);
    $this->load->view('fontEnd/Template/Footer');

  }
  public function single_Paycon()
	 {
      $id = $_GET['id'];
			  // $id =	 $this->session->userdata('name')
			 redirect('fontEnd/PaymentConfirm/getPaycon?id='.$id);
	 }

	public function getPaycon(){

		// $query = $this->Payment->getCustomer($cid);
    // $contents['customer'] = $query->result();
    $id = $_GET['id'];
    $query = $this->Order_model->get_order($id);
    $contents['order'] = $query->result();


		$contents['cart_session'] = $this->session->userdata('cart_session');
		$template['content']    = $this->load->view('fontEnd/Paymentcon',$contents,TRUE);

		$this->load->view('fontEnd/Template/Header');
		$this->load->view('fontEnd/Template/Sidebar',$template);
		$this->load->view('fontEnd/Template/Footer');

	}
	public function savePaycon(){


			$update = array
				(
					 'Order_Id'  =>  set_value('Order_Id'),
					'Order_PayConStatus'	=> 	'รอการตรวจสอบ',
				);

				$this->db->where('Order_Id',$update['Order_Id'])->update('orders',$update);


    $input = $this->input->post();
    $pathinfo = pathinfo($_FILES['Pc_Pic']['name'],PATHINFO_EXTENSION);
    $new_file = date('YmdHis').".".$pathinfo;
    move_uploaded_file($_FILES['Pc_Pic']['tmp_name'],"asset/img/".$new_file);
    $input['Pc_Pic']=$new_file;

    $this->db->insert('paymentconfirm',$input);

			redirect('fontEnd/Customer/single_history');

		}
	}
