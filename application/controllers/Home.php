<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function __construct ()
		{
			parent::__construct();
			if($this->session->userdata('group') ==	('1') )
			{
				$this->session->sess_destroy();
		    redirect('fontEnd/Login');
			}

		}

	public function index(){

			$data['cus']          = $this->Customer_model->customer();


			$contents['row']          = $this->Product_model->product();
			$contents['cart_session'] = $this->session->userdata('cart_session');



			$template['content']      = $this->load->view('fontEnd/Product',$contents,TRUE);
		  $this->load->view('fontEnd/Template/Header');
			$this->load->view('fontEnd/Home',$data);
			$this->load->view('fontEnd/Template/Sidebar',$template);
			$this->load->view('fontEnd/Template/Footer');


		}


}
