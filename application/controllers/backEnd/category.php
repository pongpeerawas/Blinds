<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Category extends CI_Controller {

		public function __construct ()
			{
				parent::__construct();
				if($this->session->userdata('group')!=	('1') )
				{
					$this->session->set_flashdata('error','ไม่ได้กินฉันหรอก');
					redirect('fontEnd/Login');
				}

			}
	public function loadpage($value)
	{
		$this->load->view('backEnd/Template/header');
		$this->load->view('backEnd/Template/sidebar');
		$this->load->view($value['views'],$value['result']);
		// $this->load->view('backEnd/Template/footer');
	}
	public function index()
	{
		 $query = $this->CategoryModel->read_db();

		$value = array(
			'result' => array(
				'data' => $query
			),
			'views' => 'backEnd/Category'
		);
		$this->loadpage($value);
	}


	public function insert()
	{
		$input = $this->input->post();
		$this->CategoryModel->insert($input);
		redirect('backEnd/Category');
		//print_r($value);
	}
public function del()
{
	$del = $this->uri->segment(4);
	$this->CategoryModel->del($del);
	redirect('backEnd/Category');


}



}
