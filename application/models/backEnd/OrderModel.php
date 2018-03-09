<?php
class OrderModel extends CI_Model
{


  public function get_order_history()
  {

    $this->db->join('customer','orders.Cus_Id = customer.Cus_Id','left');
    $q = $this->db->select('*')->from('orders')->get()->result();
    return $q;
  }


    public function update($update)
    {
     $this->db
     ->where('Order_Id',$update['Order_Id'])
     ->update('orders',$update);
    }



}
