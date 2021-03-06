<?php
class Customer_model extends CI_Model
{

  function __construct() {
    parent::__construct();
  }

  function customer(){
    return $q = $this->db->select('*')->from('customer')->get()->result();
  }
  //
  // function profile_detail($cid){
  //   return $q = $this->db->select('*')->from('customer')->where('Cus_Id',$cid)->get()->row();
  // }

  function getCustomer($id)
  {
    $query = $this->db->get_where('customer',array('Cus_Id' => $id));
    return $query;
  }

  public function update($update)
  {
   $this->db
   ->where('Cus_Id',$update['Cus_Id'])
   ->update('customer',$update);
  }



  public function check_login()
  {
    $username = set_value('username');
    $password = set_value('password');
    $stuts = '1';
    $gry = $this->db->where('Cus_Username',$username)
    ->where('Cus_Password',$password)
    ->where('Cus_Status	',$stuts)
    ->limit(1)
    ->get('customer');
    if($gry->num_rows()	>	0)
    {
      return $gry->row();
    }else{
      return array();
    }


  }//end check_usr function

  public function check_user_is_active()
  {
    //if the user try to login and his account is not acctive
    $username = set_value('username');
    $password = set_value('password');
    $stuts = '0';
    $gry = $this->db->where('Cus_Username',$username)
    ->where('Cus_Password',$password)
    ->where('Cus_Status',$stuts)
    ->limit(1)
    ->get('customer');
    if($gry->num_rows()	>	0)
    {
      return $gry->row();
    }else{
      return array();
    }


  }

  public function register($data_customer)
  {

    $this->db->insert('customer',$data_customer);
    // $this->db->insert('customer',$data_register);
  }

  public function is_usr()
  {
    $username = set_value('username');
    $gry = $this->db->where('Cus_Username',$username)
    ->limit(1)
    ->get('customer');
    if($gry->num_rows()	>	0)
    {
      return TRUE;
    }else{
      return FALSE;
    }


  }

  public function check()
  {
    $username = set_value('username');
    $password = set_value('password');
    $stuts = '1';
    $gry = $this->db->where('Cus_Username',$username)
    ->where('Cus_Password',$password)
    ->where('Cus_Status',$stuts)
    ->limit(1)
    ->get('customer');
    if($gry->num_rows()	>	0)
    {
      return $gry->row();
    }else{
      return array();
    }
  }

  public function get_shopping_history($user)
  		{// get all invoices identified by $user
  			$get_it =  $this->db->select('o.*,SUM(ol.quantity * ol.OrderList_Price) AS total')
  								->from('orders o, customer c, orderlist ol')
                  ->order_by('ol.Order_Id','DESC')
                  
  								->where('c.Cus_Id',$user)
  								->where('c.Cus_Id = o.Cus_Id')
  								->where('ol.Order_Id = o.Order_Id')
  								->group_by('ol.Order_Id')

  								->get();

  			if($get_it->num_rows() > 0 )
  			{
  				return $get_it->result();
  			}else{
  					return FALSE; //if there are no matching records
  				}
  		}



}
