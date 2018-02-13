<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class register extends CI_Controller {

	public function __construct ()
	{
		parent::__construct();
		$this->load->model('User_Model');
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
				$data_user = array
				 (
					'User_Username'			=> set_value('username'),
					'User_Password'		=>  set_value('password'),
					'User_Status'				=> '1',
					'User_Group'				=> '2'
				 );
				 	$data_customer = array
 				 (
 					'Cus_Name'			=> set_value('Cus_Name'),
					'Cus_Phone'			=> set_value('Cus_Phone	'),
					'Cus_Email'			=> set_value('Cus_Email'),
					'Cus_HouseNum'			=> set_value('Cus_HouseNum'),
					'Cus_District1'			=> set_value('Cus_District1'),
					'Cus_District2'			=> set_value('Cus_District2'),
					// 'Province_Name'			=> set_value('Province_Name'),
					'Cus_Zipcode'			=> set_value('Cus_Zipcode'),
					'Cus_Country'			=> set_value('Cus_Country')



 				 );
				 
				 if($this->User_Model->is_usr() == FALSE)
				 {
					 $this->User_Model->register($data_user,$data_customer);
						 $this->form_validation->set_rules('username');
						 $this->form_validation->set_rules('password');
						 if($this->form_validation->run()	==	FALSE)
						 {
								$this->load->view('fontEnd/login');
						 }else{
								$valid_user	= $this->User_Model->check();
								 if($valid_user	==	FALSE)
								 {
									 $this->session->set_flashdata('error','Username / Password Not Correct !' );
									 redirect('fontEnd/register');
								 }else{
										 $this->session->set_userdata('username',$valid_user->User_Username);
										 $this->session->set_userdata('group',$valid_user->User_Group);
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
