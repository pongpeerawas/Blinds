<?php
 defined('BASEPATH') OR exit('No direct script access allowed');

 class ShoppingCart extends CI_Controller{
   public function buy($Pro_Id)
   {
     $product = $this->homeModel->find($Pro_Id);
     $data = array(
         'id'      => $product->Pro_Id,
         'qty'     => 1,
         'price'   => $product->Pro_Price,
         'name'    => $product->Pro_Name,
         'detail'  => $product->Pro_Detail,
         'picture' => $product->Pro_Pic,
         'size'    => $product->Pro_Size
 );

  $this->cart->insert($data);
  $this->load->view('fontEnd/cart');
   }
   public function delete($rowid)
   {
     $this->cart->update(array('rowid' => $rowid, 'qty' => 0));
       $this->load->view('fontEnd/cart');
   }
   public function update()
   {
     $i = 1;
     foreach ($this->cart->contents() as $items) {
       $this->cart->update(array('rowid' => $items['rowid'], 'qty' => $_POST['qty'.$i]));
       $i++;
     }
     $this->load->view('fontEnd/cart');
   }
 }
