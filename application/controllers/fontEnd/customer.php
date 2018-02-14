<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customer extends CI_Controller {

	public function index(){
		$contents['row']          = $this->Customer_model->customer();
		$contents['cart_session'] = $this->session->userdata('cart_session');
		$template['content']    = $this->load->view('fontEnd/editProfile',$contents,TRUE);

		$this->load->view('fontEnd/Template/Header');
		$this->load->view('fontEnd/Template/Sidebar',$template);
		$this->load->view('fontEnd/Template/Footer');

	}
	public function single()
	{
		// $id = $_GET['id'];
		//
		redirect('fontEnd/Customer/Profile?id='.$this->session->userdata('id'));
	}

	function Profile(){


		$contents['row']          = $this->Customer_model->customer();
		$contents['cart_session'] = $this->session->userdata('cart_session');

		$template['content']      = $this->load->view('fontEnd/Profile',$contents,TRUE);
		$contents['cart_session'] = $this->session->userdata('cart_session');

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



}
