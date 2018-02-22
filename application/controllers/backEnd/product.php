<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class product extends CI_Controller {

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
		$this->load->view('backEnd/Template/Header');
		$this->load->view('backEnd/Template/Sidebar');
		$this->load->view($value['views'],$value['result']);
	  // $this->load->view('backEnd/Template/footer');
	}
	public function index()
	{
		 $query = $this->ProductModel->read_db();

		$value = array(
			'result' => array(
				'data' => $query
			),
			'views' => 'backEnd/Product/Product'
		);
		$this->loadpage($value);
	}



public function insertform()
{
	$product = $this->ProductModel->read_category();
	$value = array(
		'result' => array(
		'product' =>$product
		),
		'views' => 'backEnd/Product/AddProduct'
	);
	$this->loadpage($value);
}

public function insert()
{
	$input = $this->input->post();
	$pathinfo = pathinfo($_FILES['Pro_Pic']['name'],PATHINFO_EXTENSION);
	$new_file = date('YmdHis').".".$pathinfo;
	move_uploaded_file($_FILES['Pro_Pic']['tmp_name'],"assetAdmin/img/".$new_file);

	$input['Pro_Pic']=$new_file;
	$this->ProductModel->insert($input);
	redirect('backEnd/Product');

}


public function updateform()
{
	$read = $this->uri->segment(4);
	$query = $this->ProductModel->read_one($read);
	$product = $this->ProductModel->read_category();
	$value = array(
		'result' => array(
			'data' => $query,
			'product' => $product
		),
		'views' => 'backEnd/Product/EditProduct'
	);
	$this->loadpage($value);
}



public function update()
{
	$update = $this->input->post();
	if (!empty($_FILES['Pro_Pic']['name'])) {
	 $pathinfo = pathinfo($_FILES['Pro_Pic']['name'],PATHINFO_EXTENSION);
	 $new_file = date('YmdHis').".".$pathinfo;

	 move_uploaded_file($_FILES['Pro_Pic']['tmp_name'],"assetAdmin/img/".$new_file);
	$update['Pro_Pic']=$new_file;
}
	$this->ProductModel->update($update);
	redirect('backEnd/Product');
}

public function del()
{
	$del = $this->uri->segment(4);
	$this->ProductModel->del($del);
	redirect('backEnd/Product');


}

}
