<?php
class Payment extends CI_Model
{

  function getCustomer($cid)
  {
    $query = $this->db->get_where('customer',array('Cus_Id' => $cid));
    return $query;
  }









}
