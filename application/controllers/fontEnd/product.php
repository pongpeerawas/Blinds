<?php
 defined('BASEPATH') OR exit('No direct script access allowed');

 class product extends CI_Controller{
   public function index($index = 0)
   {
     $data['listProduct'] = $this->homeModel->findAll();
     $this->load->view('index',$data);
   }
 }
