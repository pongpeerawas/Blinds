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

<<<<<<< HEAD
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
=======
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function Index()
	{
		$this->load->view('fontEnd/Template/Header');
		// $this->load->view('Template/front/sidebar');
		$this->load->view('fontEnd/login');
		$this->load->view('fontEnd/Template/Footer');
}

}
>>>>>>> 155bb20b49009f546ff7717d0f68ed48a38aafa3
