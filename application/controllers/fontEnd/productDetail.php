<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class productDetail extends CI_Controller {
  public function index(){

    $contents['row']          = $this->Product_model->product_detail();
    $contents['cart_session'] = $this->session->userdata('cart_session');

    $template['content']      = $this->load->view('fontEnd/productDetail',$contents,TRUE);
    $this->load->view('fontEnd/Template/Header');
    $this->load->view('fontEnd/productDetail');
    $this->load->view('fontEnd/Template/Sidebar',$template);
    $this->load->view('fontEnd/Template/Footer');


  }


  function productDetailForm(){


    $contents['row']          = $this->Product_model->product();
    $contents['cart_session'] = $this->session->userdata('cart_session');

    $template['content']      = $this->load->view('fontEnd/productDetail',$contents,TRUE);
    $id = $_GET['id'];
    $query = $this->Product_model->getPro($id);
    $data['product'] = $query->result();
    $query = $this->Product_model->rel_pro();
    $data['relpro'] = $query->result();

    $this->load->view('fontEnd/Template/Header');
    $this->load->view('fontEnd/productDetail',$data);
    $this->load->view('fontEnd/Template/Sidebar',$template);
    $this->load->view('fontEnd/Template/Footer');



    }


  //
  // public function productDetailForm()
  // {
  //   $read = $this->uri->segment(4);
  //   $query = $this->productModel->read_one($read);
  //   $product = $this->productModel->read_category();
  //   $value = array(
  //     'result' => array(
  //       'data' => $query,
  //       'product' => $product
  //     ),
  //     'views' => 'fontEnd/productDetail'
  //   );
  //   $this->index($value);
  //   // $this->load->view('fontEnd/Template/Header');
  //   // $this->load->view('fontEnd/Template/Sidebar');
  //   // $this->load->view($value['views'],$value['result']);
  //   // $this->load->view('fontEnd/Template/Footer');
  // }
  //


}
