<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Order extends CI_Controller {

	public function __construct ()
	{
		parent::__construct();
		if($this->session->userdata('group')!=	('2') )
		{
			$this->session->set_flashdata('error','<div class="alert alert-warning"><center><strong>กรุณาสมัครสมาชิก</strong></center></div>');
			redirect('fontEnd/Login');
		}
		if($this->session->userdata('cart_session') ==	FALSE)
		{
			$this->session->set_flashdata('error','<div class="alert alert-warning"><center><strong>กรุณาเลือกสินค้าเข้าตระกร้า</strong></center></div>');
			redirect('Home');
		}

	}
	public function index()
	{
		// $id =	 $this->session->userdata('name')
		redirect('fontEnd/Order/getOrder?id='.$this->session->userdata('id'));
	}


	public function getOrder(){
		$id = $_GET['id'];
		$query = $this->Order_model->getCustomer($id);
		// $query = $this->Shipping_model->customer();

		$contents['shipping'] = $query->result();
		$contents['cart_session'] = $this->session->userdata('cart_session');
		$template['content']    = $this->load->view('fontEnd/Order',$contents,TRUE);



		$this->load->view('fontEnd/Template/Header');
		$this->load->view('fontEnd/Template/Sidebar',$template);
		$this->load->view('fontEnd/Template/Footer');

	}
	public function saveOrder(){

		//here for create new invoice

		$data_order = array
		(
			'Cus_Id'  =>  set_value('Cus_Id'),
			'Order_sumPrice'			=> set_value('Order_sumPrice'),
			'Order_PayConStatus'	=> 	'ยังไม่แจ้งชำระ',
			'Order_Paystatus'	=> 			'ยังไม่ชำระเงิน',
			'Order_Shipping'	=>			'ยังไม่จัดส่ง',

		);

		$this->db->insert('orders',$data_order);


		$Order_Id = $this->db->insert_id();

		if($this->session->userdata('cart_session')){
			$i = 0;
			$total =0;
			$vat =0;

			foreach($this->session->userdata('cart_session') as $cs=>$value)
			{
				$row = $this->Product_model->product_id($cs);
				$total += $row->Pro_Price*$value;
				$vat = (($total*7)/107)+$total;
				$Pro_Amount = $row->Pro_Amount-$value;

				$data_orderList = array
				(
					'Order_Id' 	  =>   $Order_Id,
					'Pro_Id'			=> 	 $cs,
					'quantity'		=> 	 $value,
					'OrderList_Price'	=> 		$row->Pro_Price,

				);

				$this->db->insert('orderlist',$data_orderList);
			}

				$data_shipping = array
				(
					'Order_Id'  =>  $Order_Id,
					'Ship_Name'			=>      set_value('Ship_Name'),
					'Ship_District'	=> 			set_value('Ship_District'),
					'Ship_Province'	=>			set_value('Ship_Province'),

				);
				$this->db->insert('shipping',$data_shipping);

			foreach($this->session->userdata('cart_session') as $cs=>$value)
			{
				$row = $this->Product_model->product_id($cs);
				$Pro_Amount = $row->Pro_Amount-$value;

				$update_proAmount = array
				(
					'Pro_Amount'  => $Pro_Amount,

				);

				$this->db->where('Pro_Id', $cs)->update('product', $update_proAmount);
			}


			redirect('fontEnd/Order/clearCart');

		}
	}
	public function clearCart(){
		$this->session->unset_userdata('cart_session');
		redirect('fontEnd/Customer/single_history');
	}

}
