<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class productModel extends CI_Model {


public function read_db()
{
	$this->db->join('category','product.Cg_Id = category.Cg_Id','left');
	$db = $this->db->get('product')->result_array();
	return $db;
}
public function read_category()
{
	$db = $this->db
	->get('category')
	->result_array();
	return $db;
}

public function insert($input)
{
 $this->db->insert('product',$input);
}

public function del($del)
{
	$this->db->where('Pro_Id',$del)
	->delete('product');
}


public function read_one($read)
{
	$query = $this->db
	->where('Pro_Id',$read)
	->get('product')
	->result_array();
	return $query;
}
public function update($update)
{
 $this->db
 ->where('Pro_Id',$update['Pro_Id'])
 ->update('product',$update);
}

}
