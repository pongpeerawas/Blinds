<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class register extends CI_Controller {

	public function __construct ()
	{
		parent::__construct();
		$this->load->model('Customer_model');
	}

	public function index()
	{

		$this->form_validation->set_rules('username','Username','required|alpha_numeric|min_length[4]|max_length[20]');
		$this->form_validation->set_rules('password','Password','required|alpha_numeric|min_length[6]|max_length[24]');
		$contents['cart_session'] = $this->session->userdata('cart_session');


		if($this->form_validation->run()	==	FALSE)
		{
			$template['content']    = $this->load->view('fontEnd/registerform',$contents,TRUE);

			 $this->load->view('fontEnd/Template/Header');
			$this->load->view('fontEnd/Template/Sidebar',$template);
			$this->load->view('fontEnd/Template/Footer');
			// $this->load->view('fontEnd/registerform',$data);

		}else{
				 	$data_customer = array
 				 (
 					'Cus_Name'			=> set_value('Cus_Name'),
					'Cus_Phone'			=> set_value('Cus_Phone	'),
					'Cus_Email'			=> set_value('Cus_Email'),
					'Cus_District'			=> set_value('Cus_District'),
					'Cus_Province'			=> set_value('Cus_Province'),
					'Cus_Zipcode'			=> set_value('Cus_Zipcode'),
					'Cus_Country'			=> set_value('Cus_Country'),
					'Cus_Username'			=> set_value('username'),
					'Cus_Password'		=>  set_value('password'),
					'Cus_Status'				=> '1',
					'Cus_Group'				=> '2'

 				 );

				 if($this->Customer_model->is_usr() == FALSE)
				 {
					 $this->Customer_model->register($data_customer);
						 $this->form_validation->set_rules('username');
						 $this->form_validation->set_rules('password');
						 if($this->form_validation->run()	==	FALSE)
						 {
								$this->load->view('fontEnd/login');
						 }else{
								$valid_user	= $this->Customer_model->check();
								 if($valid_user	==	FALSE)
								 {
									 $this->session->set_flashdata('error','Username / Password Not Correct !' );
									 redirect('fontEnd/register');
								 }else{
										 $this->session->set_userdata('username',$valid_user->Cus_Username);
										 $this->session->set_userdata('group',$valid_user->Cus_Group);
										 switch($valid_user->usr_group)
										 {
											 case 2 ://for member
											redirect('Home');
											 break;

											 default: break;
										 }
								 }
						 }

					 redirect(base_url());
				 }else{
						$this->session->set_flashdata('error','Please Write Other User Name !' );
						redirect('fontEnd/register');
				 }
		}
	}
	// public function loadpage($value)
 	// {
	// 	  $contents['cart_session'] = $this->session->userdata('cart_session');
	// 		$template['content']    = $this->load->view('fontEnd/login',$contents,TRUE);
  //
	//    $this->load->view('fontEnd/Template/Header');
  //    $this->load->view($value['views'],$value['result']);
	// 	   $this->load->view('fontEnd/Template/Footer');
	// }
  //
	// public function registerform()
	// {
	// 	$province = $this->registerModel->read_province();
	// 	$value = array(
	// 		'result' => array(
	// 		'province' => $province
	// 		),
	// 		'views' => 'fontEnd/registerform'
	// 	);
	// 	$this->loadpage($value);
	// }





}
