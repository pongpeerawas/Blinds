<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class register extends CI_Controller {

	public function loadpage($value)
 	{
	   $this->load->view('fontEnd/Template/Header');
     $this->load->view($value['views'],$value['result']);
	}

	public function registerform()
	{
		$province = $this->registerModel->read_province();
		$value = array(
			'result' => array(
			'province' => $province
			),
			'views' => 'fontEnd/registerform'
		);
		$this->loadpage($value);
	}

	public function insert()
	{
		$input = $this->input->post();
		$this->registerModel->insert($input);

		redirect('fontEnd/login/index');
		//print_r($value);
	}
	public function updateform()
{
	$Cus_Id = $this->uri->segment(3);
	$query = $this->registerModel->read_one($Cus_Id);
	$cus = $this->registerModel->read_province();
	$value = array(
		'result' => array(
			'data' => $query,
			'province' => $cus
		),
		'views' => 'editProfile'
	);
	$this->loadpage($value);
}
	public function update()
{
	$input = $this->input->post();
	$this->registerModel->update($input);
	redirect('');
	//print_r($value);
}

}
