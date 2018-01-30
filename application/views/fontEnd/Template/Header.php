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
  <!-- <link href="<?php echo base_url('asset/css/custom_css.css') ?>" rel="stylesheet" /> -->
  <style>
  #myImg {
      border-radius: 5px;
      cursor: pointer;
      transition: 0.3s;
  }

  #myImg:hover {opacity: 0.7;}

  /* The Modal (background) */
  .modal {
      display: none; /* Hidden by default */
      position: fixed; /* Stay in place */
      z-index: 1; /* Sit on top */
      padding-top: 100px; /* Location of the box */
      left: 0;
      top: 0;
      width: 100%; /* Full width */
      height: 100%; /* Full height */
      overflow: auto; /* Enable scroll if needed */
      background-color: rgb(0,0,0); /* Fallback color */
      background-color: rgba(0,0,0,0.9); /* Black w/ opacity */
  }

  /* Modal Content (image) */
  .modal-content {
      margin: auto;
      display: block;
      width: 80%;
      max-width: 700px;
  }

  /* Caption of Modal Image */
  #caption {
      margin: auto;
      display: block;
      width: 80%;
      max-width: 700px;
      text-align: center;
      color: #ccc;
      padding: 10px 0;
      height: 150px;
  }

  /* Add Animation */
  .modal-content, #caption {
      -webkit-animation-name: zoom;
      -webkit-animation-duration: 0.6s;
      animation-name: zoom;
      animation-duration: 0.6s;
  }

  @-webkit-keyframes zoom {
      from {-webkit-transform:scale(0)}
      to {-webkit-transform:scale(1)}
  }

  @keyframes zoom {
      from {transform:scale(0)}
      to {transform:scale(1)}
  }

  /* The Close Button */
  .close {
      position: absolute;
      top: 15px;
      right: 35px;
      color: #f1f1f1;
      font-size: 40px;
      font-weight: bold;
      transition: 0.3s;
  }

  .close:hover,
  .close:focus {
      color: #bbb;
      text-decoration: none;
      cursor: pointer;
  }

  /* 100% Image Width on Smaller Screens */
  @media only screen and (max-width: 700px){
      .modal-content {
          width: 100%;
      }
  }
  </style>
  </head>


    <header>
		<div class="container">
			<div class="row">
				<nav class="navbar navbar-default" role="navigation">
					<div class="container-fluid">
						<div class="navbar-header">
							<div class="navbar-brand">
								<a href="<?php echo site_url('');?>"><h1>ม่านและมู่ลี่</h1></a>
							</div>
						</div>
						<div class="menu">
							<ul class="nav nav-tabs" role="tablist">
								<li role="presentation" class="active"><a href="<?php echo site_url('');?>">Home</a></li>
                <!-- <li role="presentation"><a href="<?php echo site_url('fontEnd/ShoppingCart');?>">ตะกร้าสินค้า</li></a> -->
                <li> <a href="<?php echo base_url();?>index.php/fontEnd/Checkout"> <i class="glyphicon glyphicon-shopping-cart"></i> Checkout (<span id="update_cart"><?php if($cart_session){echo array_sum($cart_session);} else { echo '0'; } ?></span>)</a> </li>
                <li>  <?php echo ('<a>'.'You Are : '.$this->session->userdata('username').'</a>'); ?></li>

								<li role="presentation"><a href="blog.html">Blog</a></li>
								<li role="presentation"><a href="portfolio.html">Portfolio</a></li>
								<li role="presentation"><a href="<?php echo site_url('fontEnd/login');?>">เข้าสู่ระบบ</li></a>
                <li role="presentation"><a href= "<?php echo base_url();?>index.php/fontEnd/login/logout">Logout</a></label> 

							</ul>
						</div>
					</div>
				</nav>
			</div>
		</div>
	</header>
