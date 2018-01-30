<?php
 class User_Model extends CI_Model
 {

   public function check_usr()
     {
       $username = set_value('username');
       $password = set_value('password');
       $stuts = '1';
       $gry = $this->db->where('User_Username',$username)
               ->where('usr_password',$password)
               ->where('stuts',$stuts)
               ->limit(1)
               ->get('users');
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
       $gry = $this->db->where('usr_name',$username)
               ->where('usr_password',$password)
               ->where('stuts',$stuts)
               ->limit(1)
               ->get('users');
       if($gry->num_rows()	>	0)
       {
         return $gry->row();
       }else{
           return array();
       }


     }

   public function members()
     {
       $member = $this->db->get('users');
       if($member->num_rows() > 0 ) {
         return $member->result();
       } else {
         return array();
       } //end if num_rows

     }//end function member

   public function active($usr_id,$data_user)
     {
       $this->db->where('usr_id',$usr_id)
           ->update('users',$data_user);

     }

   public function disable($usr_id,$data_user)
     {
       $this->db->where('usr_id',$usr_id)
       ->update('users',$data_user);

     }

   public function register_new($data_register_new)
   {
     $this->db->insert('users',$data_register_new);
   }





 }
