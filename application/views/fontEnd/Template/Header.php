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
								
							</ul>
						</div>
					</div>
				</nav>
			</div>
		</div>
	</header>
