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

<!--Header-part-->
<div id="header">

      <?php echo "<h1>ระบบหลังบ้าน</h3>" ?>
      <!-- <img src="<?php echo base_url('assetAdmin/img/'); ?>" style="width:150px;"> -->

</div>
<!--close-Header-part-->
<!--top-Header-menu-->
<div id="user-nav" class="navbar navbar-inverse">
  <ul class="nav">
    <li  class="dropdown" id="profile-messages" ><a title="" href="#" data-toggle="dropdown" data-target="#profile-messages" class="dropdown-toggle"><i class="icon icon-user"><?php echo (' '.$this->session->userdata('username')); ?></i>  <span class="text"> </span>
      <ul class="dropdown-menu">
        <li><a href="#"><i class="icon-user"></i>โปรไฟล์</a></li>

        <li class="divider"></li>
        <li><a href= "<?php echo base_url();?>index.php/fontEnd/Login/logout"><i class="icon-key"></i>ออกจากระบบ</a></li>

      </ul>
    </li>
    <li class="dropdown" id="menu-messages"><a href="#" data-toggle="dropdown" data-target="#menu-messages" class="dropdown-toggle"><i class="icon icon-envelope"></i> <span class="text">Messages</span> <span class="label label-important">5</span> <b class="caret"></b></a>
      <ul class="dropdown-menu">
        <li><a class="sAdd" title="" href="#"><i class="icon-plus"></i> new message</a></li>
        <li class="divider"></li>
        <li><a class="sInbox" title="" href="#"><i class="icon-envelope"></i> inbox</a></li>
        <li class="divider"></li>
        <li><a class="sOutbox" title="" href="#"><i class="icon-arrow-up"></i> outbox</a></li>
        <li class="divider"></li>
        <li><a class="sTrash" title="" href="#"><i class="icon-trash"></i> trash</a></li>
      </ul>
    </li>

    <li class=""><a title="" href="#"><i class="icon icon-cog"></i> <span class="text">Settings</span></a></li>
    <li class=""><a href= "<?php echo base_url();?>index.php/fontEnd/Login/logout"><i class="icon icon-share-alt"></i> <span class="text">ออกจากระบบ</span></a></li>
  </ul>
</div>
<!--close-top-Header-menu-->
<!--start-top-serch-->
<!-- <div id="search">
  <input type="text" placeholder="Search here..."/>
  <button type="submit" class="tip-bottom" title="Search"><i class="icon-search icon-white"></i></button>
</div> -->
<!--close-top-serch-->
