<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class categoryModel extends CI_Model {


  public function read_db()
  {
  	$db = $this->db->get('category')->result_array();
  	return $db;
  }

public function insert($input)
{
 $this->db->insert('category',$input);
}

public function del($del)
{
	$this->db->where('Cg_Id',$del)
	->delete('category');
}


}
