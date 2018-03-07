<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct ()
		{
			parent::__construct();
			if($this->session->userdata('group')!=	('1') )
			{
				$this->session->set_flashdata('error','ไม่ได้กินฉันหรอก');
				redirect('fontEnd/login');
			}

		}

	public function loadpage($value)
	{
		$this->load->view('backEnd/Template/Header');
		$this->load->view('backEnd/Template/Sidebar');
		$this->load->view($value['views'],$value['result']);
		$this->load->view('backEnd/Template/Footer');
	}
	public function index()
	{
		 $query = $this->ProductModel->read_db();

		$value = array(
			'result' => array(
				'data' => $query
			),
			'views' => 'backEnd/Dashboard'
		);
		$this->loadpage($value);
	}


}
