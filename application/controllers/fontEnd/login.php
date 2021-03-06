<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Login extends CI_Controller {
  //functions
  public function __construct ()
		{
			parent::__construct();
			if($this->session->userdata('group') ==	('1') )
			{
				$this->session->sess_destroy();
				redirect('fontEnd/Login');
			}

		}
  function index()
  {

    $this->form_validation->set_rules('username','Username','required|alpha_numeric');
    $this->form_validation->set_rules('password','Password','required');
    $contents['cart_session'] = $this->session->userdata('cart_session');

    if($this->form_validation->run()	==	FALSE)
    {
      $template['content']    = $this->load->view('fontEnd/Login',$contents,TRUE);

      $this->load->view('fontEnd/Template/Header');
      $this->load->view('fontEnd/Template/Sidebar',$template);
      $this->load->view('fontEnd/Template/Footer');

    }
    else{
      $this->load->model('Customer_model');
      $valid_user	= $this->Customer_model->check_login();
      $check_user_is_active = $this->Customer_model->check_user_is_active();

      if($valid_user	==	FALSE)
      {
        if ($check_user_is_active == FALSE)
        {
          $this->session->set_flashdata('error','ขออภัยชื่อเข้าใช้ / รหัสผ่าน ไม่ถูกต้อง!' );
        }else{
          $this->session->set_flashdata('error','ขอภัยไม่พบบัญชื่อผู้ใช้ในระบบ' );
        }

        redirect('fontEnd/Login');
      }else{

        $this->session->set_userdata('username',$valid_user->Cus_Username);
        $this->session->set_userdata('id',$valid_user->Cus_Id);
        $this->session->set_userdata('group',$valid_user->Cus_Group);
        $this->session->set_userdata('name',$valid_user->Cus_Name);

        switch($valid_user->Cus_Group)
        {
          case 1 ://for admin
          redirect('backEnd/Dashboard');
          break;

          case 2 ://for member
          // redirect(base_url());
          redirect('Home');
          break;

          default: break;
        }
      }//end if valid_user

    }//end if validation


  }

  public function logout()
  {
    $this->session->sess_destroy();
    redirect('fontEnd/Login');
  }

  // function login_validation()
  // {
  //      $this->load->library('form_validation');
  //      $this->form_validation->set_rules('username', 'ชื่อเข้าใช้', 'required');
  //      $this->form_validation->set_rules('password', 'รหัสผ่าน', 'required');
  //
  //      if($this->form_validation->run())
  //      {
  //           //true
  //           $username = $this->input->post('username');
  //           $password = $this->input->post('password');
  //           //model function
  //           $this->load->model('loginModel');
  //
  //           if($this->loginModel->can_login($username, $password))
  //           {
  //                $session_data = array(
  //                     'username'     =>     $username
  //
  //                );
  //                $this->session->set_userdata($session_data);
  //                redirect('fontEnd/login/enter');
  //           }
  //           else
  //           {
  //                $this->session->set_flashdata('error', 'Invalid Username and Password');
  //                redirect('fontEnd/login/index');
  //           }
  //      }
  //      else
  //      {
  //           //false
  //           $this->index();
  //      }
  // }
  // function enter(){
  //      if($this->session->userdata('username') != '')
  //      {
  //

  //
  //
  //         redirect('Home');
  //
  //
  //
  //
  //      }
  //      else
  //      {
  //           redirect('fontEnd/login');
  //      }
  // }
  // function logout()
  // {
  //      $this->session->unset_userdata('username');
  //      redirect('fontEnd/login/index');
  // }
}
