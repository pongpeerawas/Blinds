<?php
 class User_Model extends CI_Model
 {

   public function check_usr()
     {
       $username = set_value('username');
       $password = set_value('password');
       $stuts = '1';
       $gry = $this->db->where('User_Username',$username)
               ->where('User_Password',$password)
               ->where('User_Status	',$stuts)
               ->limit(1)
               ->get('user');
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
       $gry = $this->db->where('User_Username',$username)
               ->where('User_Password',$password)
               ->where('User_Status',$stuts)
               ->limit(1)
               ->get('user');
       if($gry->num_rows()	>	0)
       {
         return $gry->row();
       }else{
           return array();
       }


     }

   public function members()
     {
       $member = $this->db->get('user');
       if($member->num_rows() > 0 ) {
         return $member->result();
       } else {
         return array();
       } //end if num_rows

     }//end function member




   public function register($data_register,$data_customer)
   {
     $this->db->insert('user',$data_register);
      $this->db->insert('customer',$data_customer);
     // $this->db->insert('customer',$data_register);
   }

   public function is_usr()
   {
     $username = set_value('username');
     $gry = $this->db->where('User_Username',$username)
     ->limit(1)
     ->get('user');
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
     $gry = $this->db->where('User_Username',$username)
     ->where('User_Password',$password)
     ->where('User_Status',$stuts)
     ->limit(1)
     ->get('user');
     if($gry->num_rows()	>	0)
     {
       return $gry->row();
       }else{
       return array();
     }



 }
}
