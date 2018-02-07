


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
  <!-- <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'> -->


</head>

<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#">Form elements</a> <a href="#" class="current">Form wizard</a> </div>
    <h1>ข้อมูลสินค้า</h1>
  </div>
  <div class="container-fluid">
    <hr>
    <a href="<?php echo site_url('backEnd/product/insertform'); ?>"><button name="button" class="btn btn-info" style="text-align:center">เพิ่ม</button></a>


    <div class="widget-box">
      <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
        <h5>รายการสินค้า</h5>
      </div>
      <div class="widget-content nopadding">
        <table class="table  data-table">
          <thead>
            <tr>
              <th>รหัส</th>
              <th>ชื่อสินค้า</th>
              <th>รายละเอียดสินค้า</th>
              <th>ประเภทสินค้า</th>
              <th>จำนวนสินค้า</th>
              <th>ราคา</th>
              <th>รูป</th>
              <th>ขนาด(ซม.)</th>
              <th>จัดการ</th>

            </tr>
          </thead>
          <tbody>

            <?php foreach ($data as $key ): ?>

              <tr>
                <td><?php echo $key['Pro_Id']; ?></td>
                <td><?php echo $key['Pro_Name'];?></td>
                <td style="width:300px;"><?php echo $key['Pro_Detail'];?></td>
                <td><?php echo $key['Cg_name'];?></td>
                <td><?php echo $key['Pro_Amount'];?></td>
                <td><?php echo $key['Pro_Price'];?></td>
                <td><img src="<?php echo base_url('assetAdmin/img/'.$key['Pro_Pic']); ?>" style="width:150px;"></td>
                <td><?php echo $key['Pro_Size'];?></td>
                <td>
                  <div class="btn-group">
                      <button class="btn btn-info">จัดการ</button>
                      <button data-toggle="dropdown" class="btn btn-info dropdown-toggle"><span class="caret"></span></button>
                      <ul class="dropdown-menu">
                        <li><a href="<?php echo site_url('backEnd/product/updateform/'.$key['Pro_Id'])?>"><span class="glyphicon icon-pencil">  แก้ไข</span></a></li>
                        <li><a href="<?php echo site_url('backEnd/product/del/'.$key['Pro_Id'])?>" onclick="return confirm('ยืนยันการลบ !')"><span class="glyphicon icon-trash"> ลบ</span> </a></li>
                      </ul>
                    </div>
                </td>


              </tr>




            <?php endforeach; ?>


          </tbody>
        </table>
      </div>
    </div>
  </div>


</div>


<script src="<?php echo base_url('assetAdmin/js/jquery.min.js') ?>"></script>
<script src="<?php echo base_url('assetAdmin/js/jquery.ui.custom.js') ?>"></script>
<script src="<?php echo base_url('assetAdmin/js/bootstrap.min.js') ?>"></script>
<script src="<?php echo base_url('assetAdmin/js/jquery.uniform.js') ?>"></script>
<script src="<?php echo base_url('assetAdmin/js/select2.min.js') ?>"></script>
<script src="<?php echo base_url('assetAdmin/js/jquery.dataTables.min.js') ?>"></script>
<script src="<?php echo base_url('assetAdmin/js/matrix.js') ?>"></script>
<script src="<?php echo base_url('assetAdmin/js/matrix.tables.js') ?>"></script>
