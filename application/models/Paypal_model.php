<?php

if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class Paypal_model extends CI_Model {

	function __construct() {
		parent::__construct();
	}

	/* This function create new Service. */

	function create($SubTotal,$PaymentMethod,$PayerStatus,$PayerMail,$CreateTime,$UpdateTime,$State,$saleId) {
         $this->db->set('Order_Id',$saleId);
        $this->db->set('PaymentMethod',$PaymentMethod);
        $this->db->set('PayerStatus',$PayerStatus);
        $this->db->set('PayerMail',$PayerMail);
        // $this->db->set('Total',$Total);
        $this->db->set('Total',$SubTotal);
        // $this->db->set('Subtotal',$Tax);
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


	
}
