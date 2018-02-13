<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class customerModel extends CI_Model {





public function read_db()
{
	$where = "Cus_Group='2'";
	$db =$this->db->where($where);
	$db = $this->db->get('customer')->result_array();
	// $db = 	$this->db->where('Cus_Group != 1');
  return $db;
}



public function del($del)
{
  $this->db->where('Cus_Id',$del)
  ->delete('customer');
}
}
