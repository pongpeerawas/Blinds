<?php
class PayconfirmModel extends CI_Model
{


  public function get_list_paycon()
  {

    $this->db->join('orders','paymentconfirm.Order_Id = orders.Order_Id','left');
  	$db = $this->db->get('paymentconfirm')->result_array();
  	return $db;
  }

  public function get_paycon($id)
  {
      // $this->db->join('orders','paymentconfirm.Order_Id = orders.Order_Id','left');
     $query = $this->db->select('*')->from('paymentconfirm')->where('Order_Id',$id)->get();
       return $query;
  }




}
