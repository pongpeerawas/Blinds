

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
    <h1>ข้อมูลสมาชิก</h1>
  </div>
  <div class="container-fluid">
    <hr>


    <div class="widget-box">
          <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
            <h5>รายชื่อสมาชิก</h5>
          </div>
          <div class="widget-content nopadding">
            <table class="table  data-table">
              <thead>
                <tr>
                  <th>รหัส</th>
                  <th>ชื่อ-สกุล</th>
                  <th>ชื่อเข้าใช้</th>
                  <th>เบอร์โทรศัพท์</th>
                  <th>อีเมลล์</th>
                  <th>บ้านเลขที่</th>
                  <th>ตำบล</th>
                  <th>อำเภอ</th>
                  <th>จังหวัด</th>
                  <th>รหัสไปรษณย์</th>
                  <th>ประเทศ</th>
                  <th>จัดการ</th>
                </tr>
              </thead>
              <tbody>
                  <?php foreach ($data as $key ): ?>
                <tr class="gradeX">
                  <td><?php echo $key['Cus_Id']; ?></td>
                  <td><?php echo $key['Cus_Name'];?></td>
                  <td><?php echo $key['User_Username'];?></td>
                  <td><?php echo $key['Cus_Phone'];?></td>
                  <td><?php echo $key['Cus_Email'];?></td>
                  <td><?php echo $key['Cus_HouseNum'];?></td>
                  <td><?php echo $key['Cus_District1'];?></td>
                  <td><?php echo $key['Cus_District2'];?></td>
                  <td><?php echo $key['province_name'];?></td>
                  <td><?php echo $key['Cus_Zipcode'];?></td>
                  <td><?php echo $key['Cus_Country'];?></td>
                  <td>
                  <a href="<?php echo site_url('backEnd/customer/del/'.$key['Cus_Id'])?>" onclick="return confirm('ยืนยันการลบ !')"><button name="button" class="btn btn-danger">ลบ</button></a></td>
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
