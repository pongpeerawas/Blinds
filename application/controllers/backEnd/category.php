<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class category extends CI_Controller {

	public function loadpage($value)
	{
		$this->load->view('backEnd/Template/header');
		$this->load->view('backEnd/Template/sidebar');
		$this->load->view($value['views'],$value['result']);
		// $this->load->view('backEnd/Template/footer');
	}
	public function index()
	{
		 $query = $this->categoryModel->read_db();

		$value = array(
			'result' => array(
				'data' => $query
			),
			'views' => 'backEnd/category'
		);
		$this->loadpage($value);
	}


	public function insert()
	{
		$input = $this->input->post();
		$this->categoryModel->insert($input);
		redirect('backEnd/category');
		//print_r($value);
	}
public function del()
{
	$del = $this->uri->segment(4);
	$this->categoryModel->del($del);
	redirect('backEnd/category');


}



}
