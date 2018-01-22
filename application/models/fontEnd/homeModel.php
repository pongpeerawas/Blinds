<?php
class homeModel extends CI_Model
{
  function __construct()
  {
    parent::__construct();
  }
  function findAll(){
    return $this->db->get('product')->result();
  }
  function find($Pro_Id){
    $this->db->where('Pro_Id',$Pro_Id);
    return $this->db->get('product')->row();
  }
}


 ?>
