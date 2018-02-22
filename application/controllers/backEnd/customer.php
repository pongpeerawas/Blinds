<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customer extends CI_Controller {


		public function __construct ()
			{
				parent::__construct();
				if($this->session->userdata('group')!=	('1') )
				{
					$this->session->set_flashdata('error','ไม่ได้กินฉันหรอก');
					redirect('fontEnd/Login');
				}

			}
	public function loadpage($value)
	{
		$this->load->view('backEnd/Template/Header');
		$this->load->view('backEnd/Template/Sidebar');
		$this->load->view($value['views'],$value['result']);
    // $this->load->view('backEnd/Template/Footer');

	}

	public function index()
	{
		 $query = $this->CustomerModel->read_db();

		$value = array(
			'result' => array(
				'data' => $query
			),
			'views' => 'backEnd/Customer'
		);
		$this->loadpage($value);
	}

	public function del()
	{
		$del = $this->uri->segment(4);
		$this->CustomerModel->del($del);
		redirect('backEnd/Customer');


	}


}
