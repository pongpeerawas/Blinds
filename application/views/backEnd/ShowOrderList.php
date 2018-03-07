


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
            <hr>
  </div>
  <div class="container-fluid">
    <div class="panel-heading">

      &nbsp;<h3 style="text-align: left">สถานที่จัดส่งสินค้า</h3>
        <table class="table table-responsive" style="text-align: left">
          <?php foreach ($shipping as $row): ?>
          <tr>
            <td>ชื่อ-สกุล : <?php echo $row->Ship_Name	;?> </td>
          </tr>
          <tr>
            <td>ที่อยู่ : <?php echo $row->Ship_District;?></td>

          </tr>
          <tr>
              <td>จังหวัด: <?php echo $row->Ship_Province;?></td>
          </tr>
            <?php endforeach;?>
        </table>

      <hr>
      <!--    ---------------------------------------------------------------------------------------------------------------->
      &nbsp;<h3 style="text-align: left">รายละเอียดสินค้า</h3>

      <table class="table table-responsive"  border="0">
        <thead>
          <tr>
            <th style="text-align: center">รูปภาพ</th>
            <!-- <th style="text-align: center">รหัสสินค้า</th> -->
            <th style="text-align: center">ชื่อสินค้า</th>
            <th style="width: 100px;text-align: center;">จำนวน</th>
            <th style="text-align: center">ราคา</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($orderlist as $row): ?>

            <tr>
              <td><img src="<?php echo base_url() ?>assetAdmin/img/<?php echo $row->Pro_Pic ?>" style=" height: 170px;"></td>
              <td><?php echo $row->Pro_Name;?></td>
              <td ><?php echo $row->quantity;?> ชิ้น</td>
              <td><?php echo $row->OrderList_Price;?> บาท</td>
            </tr>
          <?php endforeach;?>
          <tr>
            <?php foreach ($sumprice as $row): ?>

            <td colspan="6" style="text-align: right;font-size: 22px;">
                                        จำนวนเงินรวมทั้งหมด <?php echo $row->Order_sumPrice ?> บาท

                                    </td>
            <?php endforeach;?>

          </tr>

        </tbody>
      </table>
      <button class="btn btn-danger" onclick="window.history.back()"> < กลับ</button>





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
