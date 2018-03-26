<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product_model extends CI_Model {

	function __construct() {
		parent::__construct();
	}

	function product(){
		$this->db->join('category','product.Cg_Id = category.Cg_Id','left');


		$q = $this->db->select('*')->from('product')->order_by('Pro_Id','RANDOM')->get()->result();
		return $q;
	}


	function product_id($id){
		return $q = $this->db->select('*')->from('product')->where('Pro_Id',$id)->get()->row();
	}

		function getPro($id){
				$this->db->join('category','product.Cg_Id = category.Cg_Id','left');
        $query = $this->db->get_where('product',array('Pro_Id' => $id));
				return $query;

    }

    function rel_pro(){
        $query = $this->db->get('product');
        return $query;
    }


}
