<?php
class Order_model extends CI_Model
{


  // function getOrder($id){
  //   $query = $this->db->form('orders')->where('Order_Id');
  //   return $query;
  // }

  function getCustomer($id)
  {
    $query = $this->db->get_where('customer',array('Cus_Id' => $id));
    return $query;
  }


  public function get_order_list($id)
  {
      // $this->db->join('orders','orderlist.Order_Id = orders.Order_Id','left');
      $this->db->join('product','orderlist.Pro_Id = product.Pro_Id','left');

      return $query = $this->db->select('*')->from('orderlist')->where('Order_Id',$id)->get();
  }

  public function get_order_shipping($id)
  {

      // $this->db->join('orders','shipping.Order_Id = orders.Order_Id','left');

      return $query = $this->db->select('*')->from('shipping')->where('Order_Id',$id)->get();
  }
  public function get_order_sumprice($id)
  {

      // $this->db->join('orders','shipping.Order_Id = orders.Order_Id','left');

      return $query = $this->db->select('*')->from('orders')->where('Order_Id',$id)->get();
  }





}
