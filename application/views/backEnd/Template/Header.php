<!DOCTYPE html>
<html lang="en">
<head>
<title>หลังร้าน</title>

<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link href="<?php echo base_url('assetAdmin/css/bootstrap.min.css') ?>" rel="stylesheet" />
<link href="<?php echo base_url('assetAdmin/css/bootstrap-responsive.min.css') ?>" rel="stylesheet" />
<link href="<?php echo base_url('assetAdmin/css/fullcalendar.css') ?>" rel="stylesheet" />
<link href="<?php echo base_url('assetAdmin/css/matrix-style.css') ?>" rel="stylesheet" />
<link href="<?php echo base_url('assetAdmin/css/matrix-media.css') ?>" rel="stylesheet" />
<link href="<?php echo base_url('assetAdmin/font-awesome/css/font-awesome.css') ?>" rel="stylesheet" />
<link href="<?php echo base_url('assetAdmin/css/jquery.gritter.css') ?>" rel="stylesheet" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
</head>

<!--Header-part-->
<div id="header">
  <h1><a href="dashboard.php">ฺBlinds Store</a></h1>
</div>
<!--close-Header-part-->
<!--top-Header-menu-->
<div id="user-nav" class="navbar navbar-inverse">
  <ul class="nav">
    <li  class="dropdown" id="profile-messages" ><a title="" href="#" data-toggle="dropdown" data-target="#profile-messages" class="dropdown-toggle"><i class="icon icon-user"></i>  <span class="text">  คุณ  </span>
      <ul class="dropdown-menu">
        <li><a href="#"><i class="icon-user"></i>โปรไฟล์</a></li>

        <li class="divider"></li>
        <li><a href="logout.php"><i class="icon-key"></i>ออกจากระบบ</a></li>
      </ul>
    </li>

    <li class=""><a title="" href="#"><i class="icon icon-cog"></i> <span class="text">Settings</span></a></li>
    <li class=""><a title="" href="logout.php"><i class="icon icon-share-alt"></i> <span class="text">ออกจากระบบ</span></a></li>
  </ul>
</div>
<!--close-top-Header-menu-->
<!--start-top-serch-->
<div id="search">
  <input type="text" placeholder="Search here..."/>
  <button type="submit" class="tip-bottom" title="Search"><i class="icon-search icon-white"></i></button>
</div>
<!--close-top-serch-->
