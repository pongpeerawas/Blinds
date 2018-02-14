<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product_model extends CI_Model {

	function __construct() {
		parent::__construct();
	}

	function product(){
		return $q = $this->db->select('*')->from('product')->get()->result();
	}

	function product_detail($id){
		return $q = $this->db->select('*')->from('product')->where('Pro_Id',$id)->get()->row();
	}

		function getPro($id){
        $query = $this->db->get_where('product',array('Pro_Id' => $id));
        return $query;
    }
    function rel_pro(){
        $query = $this->db->get('product');
        return $query;
    }


}
