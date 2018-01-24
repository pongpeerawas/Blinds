<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	

	 	public function index(){

	 		$contents['row']          = $this->homeModel->product();
	 		$contents['cart_session'] = $this->session->userdata('cart_session');

	 		$template['content']      = $this->load->view('fontEnd/product',$contents,TRUE);
	 		$this->load->view('fontEnd/Template/Header',$template);

		  $this->load->view('fontEnd/home',$template);
			$this->load->view('fontEnd/Template/Sidebar',$template);
	    $this->load->view('fontEnd/Template/Footer',$template);


	 	}
}
