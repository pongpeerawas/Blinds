<?php
class Order_model extends CI_Model
{


  function getOrder($id){
    $query = $this->db->form('orders')->where('Order_Id');
    return $query;
  }

  function getCustomer($id)
  {
    $query = $this->db->get_where('customer',array('Cus_Id' => $id));
    return $query;
  }

  public function get_order_history()
      {// get all invoices identified by $user

        $this->db->join('customer','orders.Cus_Id = customer.Cus_Id','left');

        $q = $this->db->select('*')->from('orders')->get()->result();
        return $q;
      }

        // function get_Order(){
        //       return $q = $this->db->select('*')->from('orders')->get()->result();
        //
        // }

  // function getProid()
  // {
  //
  // $where = "Pro_Amount";
  // $db =$this->db->where($where);
  // $db = $this->db->get('product')->result_array();
  // }
//
//   public function update($update_proAmount)
//   {
// $row = $this->Product_model->product_id($cs);
//  $this->db->where('Pro_Id', $cs);
//  $this->db->update('product', $update_proAmount);
//
//
//
//   }
  // public function insertOrder($data_order,$data_orderList,$data_shipping)
  // {
  //
  //   $this->db->insert('orders',$data_order);
  //   $this->db->insert('orderlist',$data_orderList);
  //   $this->db->insert('shipping',$data_shipping);
  //
  // }



}
