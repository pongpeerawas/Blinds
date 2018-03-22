<?php

if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class Paypal_model extends CI_Model {

	function __construct() {
		parent::__construct();
	}

	/* This function create new Service. */

	function create($SubTotal,$Tax,$PaymentMethod,$PayerStatus,$PayerMail,$CreateTime,$UpdateTime,$State) {
        // $this->db->set('Order_Id',$saleId);
        $this->db->set('PaymentMethod',$PaymentMethod);
        $this->db->set('PayerStatus',$PayerStatus);
        $this->db->set('PayerMail',$PayerMail);
        // $this->db->set('Total',$Total);
        $this->db->set('Total',$SubTotal);
        $this->db->set('Subtotal',$Tax);
        $this->db->set('Payment_state',$State);
		$this->db->set('CreateTime',$CreateTime);
		$this->db->set('UpdateTime',$UpdateTime);
		$this->db->insert('payments');
		$id = $this->db->insert_id();
		return $id;
	}
	public function update_order_status($updatedata)
	{
		$this->db
		->where('Order_Id',$updatedata['Order_Id'])
		->update('orders',$updatedata);
	}
	public function update_order_id($updatedatapay)
	{
		$this->db
		->where('Order_Id',$updatedatapay['Order_Id'])
		->update('payments',$updatedatapay);
	}

	  public function check_oid()
	  {
	    $item_name = set_value('item_name');
	    $gry = $this->db->where('Order_Id',$item_name)
	    ->get('orders');
	    if($gry->num_rows()	>	0)
	    {
	      return $gry->row();
	    }else{
	      return array();
	    }
	  }
}
