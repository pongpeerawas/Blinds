<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customer extends CI_Controller {

	public function index(){
    $contents['cart_session'] = $this->session->userdata('cart_session');
    $template['content']    = $this->load->view('fontEnd/editProfile',$contents,TRUE);

    $this->load->view('fontEnd/Template/Header');
    $this->load->view('fontEnd/Template/Sidebar',$template);
    $this->load->view('fontEnd/Template/Footer');

		}
    public function single()
     {
         $cid = $_GET['id'];
         redirect('fontEnd/Customer/editProfile?id='.$cid);
     }

      function editProfile(){


        $contents['cart_session'] = $this->session->userdata('cart_session');
        $contents['row']          = $this->Customer_model->customer();

        $template['content']    = $this->load->view('fontEnd/editProfile',$contents,TRUE);

        $cid = $_GET['id'];
        $query = $this->Customer_model->getCustomer($cid);
        $data['customer'] = $query->result();


        $this->load->view('fontEnd/Template/Header');
        $this->load->view('fontEnd/Template/Sidebar',$template);
        $this->load->view('fontEnd/editProfile',$data);
        $this->load->view('fontEnd/Template/Footer');



        }



}
