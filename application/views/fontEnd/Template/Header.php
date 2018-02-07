<!DOCTYPE HTML>
<html>
<!DOCTYPE html>
<html lang="en">
<head>
<title>หลังร้าน</title>

<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link href="<?php echo base_url('assetAdmin/css/bootstrap.min.css') ?>" rel="stylesheet" />
<link href="<?php echo base_url('assetAdmin/css/bootstrap-responsive.min.css') ?>" rel="stylesheet" />
<link href="<?php echo base_url('assetAdmin/css/uniform.css') ?>" rel="stylesheet" />
<link href="<?php echo base_url('assetAdmin/css/select2.css') ?>" rel="stylesheet" />
<link href="<?php echo base_url('assetAdmin/css/matrix-style.css') ?>" rel="stylesheet" />
<link href="<?php echo base_url('assetAdmin/css/matrix-media.css') ?>" rel="stylesheet" />
<link href="<?php echo base_url('assetAdmin/font-awesome/css/font-awesome.css') ?>" rel="stylesheet" />
<link href="<?php echo base_url('assetAdmin/css/fullcalendar.css') ?>" rel="stylesheet" />
<link href="<?php echo base_url('assetAdmin/css/jquery.gritter.css') ?>" rel="stylesheet" />


<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
<!-- <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script> -->

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
								<li role="presentation" class="active"><a href="<?php echo base_url();?>index.php/Home"> หน้าแรก</a></li>
                <li > <a href="<?php echo base_url();?>index.php/fontEnd/Checkout"> <i class="glyphicon glyphicon-shopping-cart"></i> ตะกร้าสินค้า <span class="badge badge-info" id="update_cart"><?php if($cart_session){echo array_sum($cart_session);} else { echo '0'; } ?></span></a> </li>
                <li>  <?php echo ('<a>'.''.$this->session->userdata('username').'</a>'); ?></li>

                <li  role="presentation" >
                  <?php if($this->session->userdata('username') ==	FALSE){ ?>
                  <li role="presentation">
                    <a href="<?php echo site_url('fontEnd/login');?>">สมัครสมาชิก/ล็อกอิน</li></a>
                  <?php }else{ ?>
                <li role="presentation"><a href="blog.html">ข้อมูลการสั่งซื้อ</a></li>
                <li>  <?php echo ('<a>'.''.$this->session->userdata('username').'</a>'); ?></li>
                <li><a href= "<?php echo base_url();?>index.php/fontEnd/login/logout">ล็อกเอาท์</a></li>
                <?php } ?></i></a>
                </li>



								<li role="presentation"><a href="portfolio.html">Portfolio</a></li>
								<li role="presentation"><a href="<?php echo site_url('fontEnd/login');?>">สมัครสมาชิก/ล็อกอิน</li></a>
                <li role="presentation"><a href= "<?php echo base_url();?>index.php/fontEnd/login/logout">ล็อกเอาท์</a></label>

							</ul>
						</div>
					</div>
				</nav>
			</div>
		</div>




	</header>
