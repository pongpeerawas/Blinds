<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller {

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

		$contents['row']          = $this->Product_model->product();
		$contents['cart_session'] = $this->session->userdata('cart_session');

		$template['content']      = $this->load->view('fontEnd/Product',$contents,TRUE);
		$this->load->view('fontEnd/Template/Header');
		$this->load->view('fontEnd/Home');
		$this->load->view('fontEnd/Template/Sidebar',$template);
		$this->load->view('fontEnd/Template/Footer');


	}
	public function single()
	 {
			 $id = $_GET['id'];
			 // $id =	 $this->session->userdata('id')
			 redirect('fontEnd/Product/ProductDetailForm?id='.$id);
	 }

	   function productDetailForm(){


	     $contents['row']          = $this->Product_model->product();
	     $contents['cart_session'] = $this->session->userdata('cart_session');

	     $template['content']      = $this->load->view('fontEnd/ProductDetail',$contents,TRUE);

	     $id = $_GET['id'];
	     $query = $this->Product_model->getPro($id);
	     $data['product'] = $query->result();

			 $query = $this->Product_model->rel_pro();
			 $data['relpro'] = $query->result();

	     $this->load->view('fontEnd/Template/Header');
	     $this->load->view('fontEnd/Template/Sidebar',$template);
	     $this->load->view('fontEnd/ProductDetail',$data);
	     $this->load->view('fontEnd/Template/Footer');



	     }



}
