<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Checkout extends CI_Controller {
	// public function __construct ()
	// 	{
	// 		parent::__construct();
	// 		if($this->session->userdata('group') ==	('1') )
	// 		{
	// 			$this->session->sess_destroy();
	// 			redirect('fontEnd/login');
	// 		}
	//
	// 	}

	public function __construct ()
		{
			parent::__construct();
			if($this->session->userdata('group')!=	('2') )
			{
				$this->session->set_flashdata('error','กรุณาสมัครสมาชิก');
				redirect('fontEnd/login');
			}

		}

	public function index(){




	}




}
