
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
  <head>
    
  </head>

</head>

<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#">Form elements</a> <a href="#" class="current">Form wizard</a> </div>
    <h1>รายการการแจ้งชำระเงิน</h1>
  </div>
  <div class="container-fluid">
    <hr>


    <div class="widget-box">
      <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
        <h5>รายการการแจ้งชำระเงิน</h5>
      </div>
      <div class="widget-content nopadding">
        <table class="table  data-table">
          <thead>
            <tr>
              <th>รหัส</th>
              <th>เลขที่ใบสั่งซื้อ</th>
              <th>วันที่</th>
              <th>บัญชี</th>
              <th>ชื่อผู้เเจ้ง</th>
              <th>ราคา</th>
              <th>รูป</th>

              <th>รายละเอียด</th>



            </tr>
          </thead>
          <tbody>

            <?php foreach ($ShowPaycon as $key ): ?>

              <tr>
                <td><?php echo $key['Pc_Id']; ?></td>
                <td><?php echo $key['Order_Id'];?></td>
                <td><?php echo $key['Pc_date'];?></td>
                <td><?php echo $key['Pc_Bank'];?></td>
                <td><?php echo $key['Name'];?></td>
                <td><?php echo $key['Pc_Price'];?></td>
                <td><a href="<?php echo site_url('backEnd/PaymentConfirm/ShowPicPaycon/'.$key['Pc_Id'])?>"><img  src="<?php echo base_url('asset/img/'.$key['Pc_Pic']); ?>" id="myImg" style="width:150px;"></a></td>
                <td><?php echo $key['Pc_Detail'];?></td>



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
