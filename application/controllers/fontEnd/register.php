<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class register extends CI_Controller {

	public function loadpage($value)
 	{
	   $this->load->view('fontEnd/Template/Header');
     $this->load->view($value['views'],$value['result']);

	}
		public function index()
		{
			 $query = $this->registermodel->read_db();

			$value = array(
				'result' => array(
					'data' => $query
				),
				'views' => 'fontEnd/registerform'
			);
			$this->loadpage($value);
		}

	public function registerform()
	{
		$province = $this->registermodel->read_province();
		$value = array(
			'result' => array(
			'province' =>$province
			),
			'views' => 'fontEnd/registerform'
		);
		$this->loadpage($value);
	}

	// public function province()
	// {
	// 	$query = $this->registermodel->read_db();
	// 	$value = array(
	// 		'data'=>$query
	// 	);
	// 	// $this->load->view('eiei',$value);
	// 	//print_r($value);
	// }
	public function insert()
	{
		$input = $this->input->post();
		$this->registermodel->insert($input);

		redirect('fontEnd/login/showLogin');
		//print_r($value);
	}
	// public function __construct()
	// {
	// 	parent::__construct();
	// 	$this->load->helper(array('form', 'url')); // โหลดเฮลเปอร์ form และ url ของ ci มาใช้งาน
	// 	$this->load->library('form_validation'); // โหลดไลบรารี่ form_validation ของ ci มาใช้งาน
	// }

// 	public function index()
// 	{
//     $this->load->view('fontEnd/Template/Header');
//     // $this->load->view('Template/front/sidebar');
//     $this->load->view('fontEnd/register');
// 	}
// 	public function insertform()
// {
// 	$customer = $this->personalmodel->read_customer();
// 	$value = array(
// 		'result' => array(
// 		'customer' =>$customer
// 		),
// 		'views' => 'rigester'
// 	);
// 	$this->loadpage($value);
// }
	// public function validate()
	// {
	// 	$this->form_validation->set_rules('Cus_Name', 'Name', 'required');
	// 	$this->form_validation->set_rules('Cus_Phone', 'Phone', 'required');
	// 	$this->form_validation->set_rules('Cus_Email', 'Email', 'required');
  //   $this->form_validation->set_rules('Cus_HouseNum', 'HouseNum', 'required');
  //   $this->form_validation->set_rules('Cus_District1', 'District1', 'required');
  //   $this->form_validation->set_rules('Cus_District2', 'District2', 'required');
  //   $this->form_validation->set_rules('Cus_Province', 'Province', 'required');
  //   $this->form_validation->set_rules('Cus_Zipcode', 'Zipcode', 'required');
  //   $this->form_validation->set_rules('Cus_Country', 'Country', 'required');
  //
	// 	if ($this->form_validation->run() == FALSE)
	// 	{
	// 			$this->load->view('fontEnd/register');
	// 	}else{
	// 		$Cus_Name = $this->input->post('Cus_Name');
	// 		$Cus_Phone = $this->input->post('Cus_Phone');
	// 		$Cus_Email = $this->input->post('Cus_Email');
  //     $Cus_Housenum = $this->input->post('Cus_HouseNum');
  //     $Cus_District1 = $this->input->post('Cus_District1');
  //     $Cus_District2 = $this->input->post('Cus_District2');
  //     $Cus_Province = $this->input->post('Cus_Province');
  //     $Cus_Zipcode = $this->input->post('Cus_Zipcode');
  //     $Cus_Country = $this->input->post('Cus_Country');
  // 		}
			// $this->load->model('Model_register');
  //
  //     $data = array(
  //       'Cus_Name' => $Cus_Name,
  //       'Cus_Phone' => $Cus_Phone,
  //       'Cus_Email'  => $Cus_Email,
  //       'Cus_HouseNum' => $Cus_Housenum,
  //       'Cus_District1' => $Cus_District1,
  //       'Cus_District2' => $Cus_District2,
  //       'Cus_Province' => $Cus_Province,
  //       'Cus_Zipcode' => $Cus_Zipcode,
  //       'Cus_Country' => $Cus_Country
  //     );
  //     $this->Model_register->add($data);
	// 	}
	// }
// 	public function insert()
// {
// 	$input = $this->input->post();
// 	$this->Model_register->insert($input);
// 	redirect('fontEnd/login/showLogin');
// 	//print_r($value);
// }
}
