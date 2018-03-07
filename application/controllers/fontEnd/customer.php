<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customer extends CI_Controller {

	public function __construct ()
		{
			parent::__construct();
			if($this->session->userdata('group') ==	('1') )
			{
				$this->session->sess_destroy();
				redirect('fontEnd/Login');
			}
			if($this->session->userdata('username') ==	FALSE)
		{
			redirect('fontEnd/Login');
		}
}


	public function index(){
		$contents['row']          = $this->Customer_model->customer();
		$contents['cart_session'] = $this->session->userdata('cart_session');
		$template['content']    = $this->load->view('fontEnd/EditProfile',$contents,TRUE);

		$this->load->view('fontEnd/Template/Header');
		$this->load->view('fontEnd/Template/Sidebar',$template);
		$this->load->view('fontEnd/Template/Footer');

	}
	public function single()
	 {
			  // $id =	 $this->session->userdata('name')
			 redirect('fontEnd/Customer/Profile?id='.$this->session->userdata('id'));
	 }

	function Profile(){


		$contents['row']          = $this->Customer_model->customer();
		$contents['cart_session'] = $this->session->userdata('cart_session');

		$template['content']      = $this->load->view('fontEnd/Profile',$contents,TRUE);

		$id = $_GET['id'];
		$query = $this->Customer_model->getCustomer($id);
		$data['editProfile'] = $query->result();


		$this->load->view('fontEnd/Template/Header');
		$this->load->view('fontEnd/Profile',$data);
		// $this->load->view('fontEnd/Template/Sidebar',$template);

		$this->load->view('fontEnd/Template/Footer');


	}

	public function update()
	{


		$update = $this->input->post();
		$this->Customer_model->update($update);

		redirect('fontEnd/Customer/single');
	}


	public function single_history()
	 {
			  // $id =	 $this->session->userdata('name')
			 redirect('fontEnd/Customer/shopping_history?id='.$this->session->userdata('id'));
	 }

	public function shopping_history()
		{

						$contents['row']          = $this->Customer_model->customer();
						$contents['cart_session'] = $this->session->userdata('cart_session');

						$template['content']      = $this->load->view('fontEnd/Profile',$contents,TRUE);

						$id = 	$this->session->userdata('id');
						$query = $this->Customer_model->getCustomer($id);
						$user=$this->session->userdata('id');
						$data['history'] = $this->Customer_model->get_shopping_history($user);
						$this->load->view('fontEnd/Template/Header');
						$this->load->view('fontEnd/History',$data);
						$this->load->view('fontEnd/Template/Footer');

		}

		// public function updateform()
		// {
		// 	$read = $this->uri->segment(4);
		// 	$query = $this->ProductModel->read_one($read);
		// 	$product = $this->ProductModel->read_category();
		// 	$value = array(
		// 		'result' => array(
		// 			'data' => $query,
		// 			'product' => $product
		// 		),
		// 		'views' => 'backEnd/Product/EditProduct'
		// 	);
		// 	$this->loadpage($value);
		// }
		public function single_OrderDetail()
		 {
				 $id = $_GET['id'];
				 // $id =	 $this->session->userdata('id')
				 redirect('fontEnd/Customer/OrderDetail?id='.$id);
		 }
			 public function OrderDetail()
	 			{

	 							$contents['row']          = $this->Customer_model->customer();
	 							$contents['cart_session'] = $this->session->userdata('cart_session');
	 							$template['content']      = $this->load->view('fontEnd/Profile',$contents,TRUE);

	 							$id = $_GET['id'];

								$query = $this->Order_model->get_order_list($id);
								$data['orderlist'] = $query->result();

								$query = $this->Order_model->get_order_shipping($id);
								$data['shipping'] = $query->result();

								$query = $this->Order_model->get_order($id);
								$data['sumprice'] = $query->result();


	 							$this->load->view('fontEnd/Template/Header');
	 							$this->load->view('fontEnd/OrderDetail',$data);
	 							$this->load->view('fontEnd/Template/Footer');

	 			}
}
