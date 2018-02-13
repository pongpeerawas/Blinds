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
				 
         redirect('fontEnd/editProfile/Profile?id='.$this->session->userdata('id'));
     }




}
