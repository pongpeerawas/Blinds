<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class registerModel extends CI_Model {

  public function read_db()
  {
  	$this->db->join('province','customer.Province_Id = province.Province_Id','left');
  	$db = $this->db->get('customer')->result_array();
  	return $db;
  }
  public function read_province()
  {
  	$db = $this->db
  	->get('province')
  	->result_array();
  	return $db;
  }
  public function insert($input)
  {
   $this->db->insert('customer',$input);
  }

  public function read_one($input)
  {
  	$query = $this->db
  	->where('Cus_Id',$input)
  	->get('customer')
  	->result_array();
  	return $query;
  }

}
