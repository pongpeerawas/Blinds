<?php
 class loginModel extends CI_Model
 {
      function can_login($username, $password)
      {
           $this->db->where('User_Username', $username);
           $this->db->where('User_Password', $password);
          

           $query = $this->db->get('user');
           //SELECT * FROM users WHERE username = '$username' AND password = '$password'
           if($query->num_rows() > 0)
           {
                return true;
           }
           else
           {
                return false;
           }
      }
 }
