<?php
 class Customer_model extends CI_Model
 {

   	function __construct() {
   		parent::__construct();
   	}

    	function customer(){
    		return $q = $this->db->select('*')->from('customer')->get()->result();
    	}

   	function profile_detail($cid){
   		return $q = $this->db->select('*')->from('customer')->where('Cus_Id',$cid)->get()->row();
   	}

   		function getCustomer($cid){
           $query = $this->db->get_where('customer',array('Cus_Id' => $cid));
           return $query;
       }


}
