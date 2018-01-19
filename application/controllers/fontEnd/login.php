<?php
 defined('BASEPATH') OR exit('No direct script access allowed');
 class login extends CI_Controller {
      //functions
      function index()
      {
           //http://localhost/tutorial/codeigniter/main/login
           $data['title'] = 'CodeIgniter Simple Login Form With Sessions';
           $this->load->view("fontEnd/login", $data);
      }
      function login_validation()
      {
           $this->load->library('form_validation');
           $this->form_validation->set_rules('username', 'ชื่อเข้าใช้', 'required');
           $this->form_validation->set_rules('password', 'รหัสผ่าน', 'required');

           if($this->form_validation->run())
           {
                //true
                $username = $this->input->post('username');
                $password = $this->input->post('password');
                //model function
                $this->load->model('loginModel');
                if($this->loginModel->can_login($username, $password))
                {
                     $session_data = array(
                          'username'     =>     $username
                     );
                     $this->session->set_userdata($session_data);
                     redirect('fontEnd/login/enter');
                }
                else
                {
                     $this->session->set_flashdata('error', 'Invalid Username and Password');
                     redirect('fontEnd/login/index');
                }
           }
           else
           {
                //false
                $this->index();
           }
      }
      function enter(){
           if($this->session->userdata('username') != '')
           {
                echo '<h2>Welcome - '.$this->session->userdata('username').'</h2>';
								echo '<label><a href="'.base_url().'fontEnd/login/logout">Logout</a></label>';
						    // echo '<label><a href="'.site_url('welcome/insertform')>logout</a></label>';

           }
           else
           {
                redirect('fontEnd/login');
           }
      }
      function logout()
      {
           $this->session->unset_userdata('username');
           redirect('fontEnd/login/index');
      }
 }
