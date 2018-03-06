


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
    <h1>รายการสั่งซื้อสินค้า</h1>
  </div>
  <div class="container-fluid">
    <hr>


    <div class="widget-box">
      <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
        <h5>รายการสั่งซื้อสินค้า</h5>
      </div>
      <div class="widget-content nopadding">
        <table class="table  data-table">
          <thead>
            <tr>
              <th>รหัส</th>
              <th>ชื่อลูกค้า</th>
              <th>วันที่สั่งซื้อ</th>
              <th>ราคา</th>
              <th>สถานะการชำระเงิน</th>
              <th>สถานะการจัดส่ง</th>
              <th>สถานะแจ้งการโอน</th>
              <th>จัดการและดูรายละเอียด</th>


            </tr>
          </thead>
          <tbody>

            <?php foreach ($history as $row ): ?>

              <tr>
                <td><?php echo $row->Order_Id;?></td>
                <td><?php echo $row->Cus_Name;?></td>
                <td><?php echo $row->Order_datetime;?></td>
                <td><?php echo $row->Order_sumPrice;?></td>
                <td><?php echo $row->Order_Paystatus;?></td>
                <td><?php echo $row->Order_Shipping;?></td>
                <td><?php echo $row->Order_PayConStatus;?></td>
                <td>
                  <div class="btn-group">
                      <button class="btn btn-info">จัดการ</button>
                      <button data-toggle="dropdown" class="btn btn-info dropdown-toggle"><span class="caret"></span></button>
                  <ul class="dropdown-menu">
                  <li><a href="<?php echo site_url('backEnd/Order/updateform/'.$row->Order_Id)?>"><span class="glyphicon icon-pencil">  แก้ไข</span></a></li>
                  <li><a href="<?php echo site_url('backEnd/Order/ShowOrderList/'.$row->Order_Id)?>"><span class="glyphicon icon-book"> ดูรายละเอียด</span> </a></li>
                </div>
                </ul></td>

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
