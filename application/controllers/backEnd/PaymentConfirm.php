<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PaymentConfirm extends CI_Controller {

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
		$query['ShowPaycon'] = $this->PayconfirmModel->get_list_paycon();

		$this->load->view('backEnd/Template/Header');
		$this->load->view('backEnd/Template/Sidebar');
		$this->load->view('backEnd/ShowPaycon',$query);
		$this->load->view('backEnd/Template/footer');
	}
	
	public function ShowPaycon()
	{

		$id = $this->uri->segment(4);

		$query = $this->PayconfirmModel->get_paycon($id);
		$data['ShowPaycon'] = $query->result();


		$this->load->view('backEnd/Template/Header');
		$this->load->view('backEnd/Template/Sidebar');
		$this->load->view('backEnd/ShowPaycon2',$data);
		$this->load->view('backEnd/Template/Footer');

	}


	}
