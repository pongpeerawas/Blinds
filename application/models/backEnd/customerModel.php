<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class customerModel extends CI_Model {





public function read_db()
{
  $this->db->join('province','customer.Province_Id = province.Province_Id','left');
	$db = $this->db->get('customer')->result_array();
  return $db;
}



public function del($del)
{
  $this->db->where('Cus_Id',$del)
  ->delete('customer');
}
}
