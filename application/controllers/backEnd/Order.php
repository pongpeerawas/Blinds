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
		$data['history'] = $this->Order_model->get_order_history();

		$this->load->view('backEnd/Template/Header');
		$this->load->view('backEnd/Template/Sidebar');
		$this->load->view('backEnd/ShowOrder',$data);
	  // $this->load->view('backEnd/Template/footer');
	}



}
