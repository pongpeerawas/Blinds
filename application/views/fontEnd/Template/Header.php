<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ม่านและมู่ลี่</title>

    <!-- Bootstrap -->
  <link href="<?php echo base_url('asset/css/bootstrap.min.css') ?>" rel="stylesheet" />
	<link href="<?php echo base_url('asset/css/responsive-slider.css') ?>" rel="stylesheet" />
	<link href="<?php echo base_url('asset/css/animate.css') ?>" rel="stylesheet" />
  <link href="<?php echo base_url('asset/css/font-awesome.min.css') ?>" rel="stylesheet" />
  <link href="<?php echo base_url('asset/css/style.css') ?>" rel="stylesheet" />
  <link href="<?php echo base_url('asset/css/datepicker.css') ?>" rel="stylesheet" />

  <header>
  <div class="container">
    <div class="row">

      <nav class="navbar navbar-default" role="navigation">
        <div class="container-fluid">
          <div class="navbar-header">
            <div class="navbar-brand">
              <a href="<?php echo site_url('');?>"><h1>Blinds Shop</h1></a>
            </div>
          </div>
          <div class="menu">
            <ul class="nav nav-tabs" role="tablist">
              <li role="presentation" class="active"><a href="<?php echo base_url();?>index.php/Home"> หน้าแรก</a></li>
              <li > <a href="<?php echo base_url();?>index.php/fontEnd/Cart/getCart"> <i class="glyphicon glyphicon-shopping-cart"></i> <span class="badge badge-info" id="update_cart"><?php if($cart_session){echo array_sum($cart_session);} else { echo '0'; } ?></span></a> </li>
              <li role="presentation"><a href="portfolio.html">วิธีการชำระเงิน</a></li>


              <li  role="presentation" >
                <?php if($this->session->userdata('username') ==	FALSE){ ?>
                <li role="presentation">
                  <a href="<?php echo site_url('fontEnd/login');?>">สมัครสมาชิก/ล็อกอิน</li></a>
                <?php }else{ ?>
              <li role="presentation"><a href="blog.html">ข้อมูลการสั่งซื้อ</a></li>

              <li><a href="<?php echo base_url()?>index.php/fontEnd/Customer/single?id=<?$this->session->userdata('id')?> ">คุณ : <?php echo $this->session->userdata('name') ?></a></li>

              <li><a href= "<?php echo base_url();?>index.php/fontEnd/login/logout">ล็อกเอาท์</a></li>
              <?php } ?></i></a>
              </li>
            </ul>
          </div>
        </div>

      </nav>

    </div>
  </div>




</header>
