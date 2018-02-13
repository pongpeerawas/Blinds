<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class editProfile extends CI_Controller {

	public function index(){
    $contents['cart_session'] = $this->session->userdata('cart_session');
    $template['content']    = $this->load->view('fontEnd/editProfile',$contents,TRUE);

    $this->load->view('fontEnd/Template/Header');
    $this->load->view('fontEnd/Template/Sidebar',$template);
    $this->load->view('fontEnd/Template/Footer');

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
				// public function shopping_history()
				// 	{
        //
        //
				// 		$user=$this->session->userdata('username');
				// 		$data['history'] = $this->model_customer->get_shopping_history($user);
				// 		$this->load->view('customer/shopping_history_list',$data);
				// 	}


}
