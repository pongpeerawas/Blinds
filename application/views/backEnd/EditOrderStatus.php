


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
    <h1>แก้ไขสถานะการสั่งซื้อสินค้า การจัดส่งและการแจ้งชำระ</h1>
  </div>

    <div class="container-fluid">
      <hr>

<div class="span6">
      <div class="widget-box">
        <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
          <h5>แก้ไขสถานะการสั่งซื้อสินค้า การจัดส่งและการแจ้งชำระ</h5>
        </div>
        <div class="widget-content nopadding">
          <?php echo form_open_multipart('backEnd/Order/updateorderStatus');?>
          <?php  foreach ($updateOrderStatus as $row): ?>
          <table class="table">
            <thead>
              <tr>
                <!-- <th>สถานะการชำระเงินออนไลน์</th> -->
                <th>สถานะการจัดส่ง</th>
                <th>สถานะแจ้งการโอน</th>
                <th></th>

              </tr>
            </thead>
            <tbody>



              <tr>
                <input type="hidden" class="form-control" name="Order_Id" value="<?php echo $row->Order_Id ?>" readonly>

                <td>
                  <select name="Order_Shipping" value="<?php echo $row->Order_Shipping ?>"   required>
                    <option value="<?php echo $row->Order_Shipping ?>" ><?php echo $row->Order_Shipping ?></option>
                  <?php if ($row->Order_Shipping == "ยังไม่จัดส่ง"): ?>
                    <option value="จัดส่งแล้ว">จัดส่งแล้ว</option>
                  <?php else: ?>
                    <option value="ยังไม่จัดส่ง">ยังไม่จัดส่ง</option>
                  <?php endif; ?>

                  </select>
                </td>
                <td>
                  <select name="Order_PayConStatus" value="<?php echo $row->Order_PayConStatus ?>"   required>
                    <option value="<?php echo $row->Order_PayConStatus ?>" ><?php echo $row->Order_PayConStatus ?></option>
                  <?php if ($row->Order_PayConStatus == "รอการตรวจสอบ"): ?>
                    <option value="แจ้งชำระแล้ว">แจ้งชำระแล้ว</option>
                    <option value="ยังไม่แจ้งชำระเงิน">ยังไม่แจ้งชำระเงิน</option>

                  <?php elseif ($row->Order_PayConStatus == "ยังไม่แจ้งชำระเงิน"): ?>
                    <option value="แจ้งชำระแล้ว">แจ้งชำระแล้ว</option>
                  <?php else: ?>
                    <option value="ยังไม่แจ้งชำระเงิน">ยังไม่แจ้งชำระเงิน</option>
                  <?php endif; ?>

                </td>

                <td>

                    <input   value=บันทึก type=submit class="btn btn-success "   class="form-control" />

                </td>


              </tr>




            </tbody>
          </table>
        <?php endforeach;?>

        <?php echo form_close();  ?>
      </div>
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
