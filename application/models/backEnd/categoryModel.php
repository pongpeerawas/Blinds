<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CategoryModel extends CI_Model {


  public function read_db()
  {
  	$db = $this->db->get('category')->result_array();
  	return $db;
  }
  public function read_one($read)
  {
  	$query = $this->db
  	->where('Cg_Id',$read)
  	->get('category')
  	->result_array();
  	return $query;
  }
public function insert($input)
{
 $this->db->insert('category',$input);
}
public function update($update)
{
 $this->db
 ->where('Cg_Id',$update['Cg_Id'])
 ->update('category',$update);
}

public function del($del)
{
	$this->db->where('Cg_Id',$del)
	->delete('category');
}


}
