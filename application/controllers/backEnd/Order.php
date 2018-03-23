<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Order extends CI_Controller {

	public function __construct ()
	{
		parent::__construct();
		if($this->session->userdata('group')!=	('1') )
		{
			$this->session->set_flashdata('error','<div class="alert alert-warning"><center><strong>แอดมินเท่านั้นเเด้อ</strong></center></div>');
			redirect('fontEnd/Login');
		}

	}
	public function index()
	{
		$query['history'] = $this->OrderModel->get_order_history();

		$this->load->view('backEnd/Template/Header');
		$this->load->view('backEnd/Template/Sidebar');
		$this->load->view('backEnd/ShowOrder',$query);
		// $this->load->view('backEnd/Template/footer');
	}

	public function updateOrderStatusform()
	{
		$id = $this->uri->segment(4);
		$query = $this->Order_model->get_order($id);
		$data['updateOrderStatus'] = $query->result();


		$this->load->view('backEnd/Template/Header');
		$this->load->view('backEnd/Template/Sidebar');
		$this->load->view('backEnd/EditOrderStatus',$data);
		$this->load->view('backEnd/Template/Footer');
	}


	public function updateorderStatus()
	{
		$update = array
		(
			'Order_Id'  =>  set_value('Order_Id'),
			'Order_Paystatus'	=> 	set_value('Order_Paystatus'),
			'Order_PayConStatus'	=> 	set_value('Order_PayConStatus'),
			'Order_Shipping'	=> 			set_value('Order_Shipping'),
		);

		$this->OrderModel->update($update);


		redirect('backEnd/Order');
	}


	public function OrderDetail()
	{

		// $contents['row']          = $this->Customer_model->customer();
		// // $contents['cart_session'] = $this->session->userdata('cart_session');
		// $template['content']      = $this->load->view('backEnd/ShowOrderList',$contents,TRUE);

		// $id = $_GET['id'];
		$id = $this->uri->segment(4);

		$query = $this->Order_model->get_order_list($id);
		$data['orderlist'] = $query->result();

		$query = $this->Order_model->get_order_shipping($id);
		$data['shipping'] = $query->result();

		$query = $this->Order_model->get_order($id);
		$data['sumprice'] = $query->result();


		$this->load->view('backEnd/Template/Header');
		$this->load->view('backEnd/Template/Sidebar');
		$this->load->view('backEnd/ShowOrderList',$data);
		$this->load->view('backEnd/Template/Footer');

	}





}
