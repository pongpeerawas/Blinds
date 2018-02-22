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
    <h1>จัดการประเภทสินค้า</h1>
  </div>
  <div class="container-fluid"><hr>
    <div class="row-fluid">
      <div class="span6">
        <?php echo form_open('backEnd/Category/insert'); ?>

        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-pencil"></i> </span>
            <h5>เพิ่มประเภทสินค้า</h5>
          </div>
          <div class="widget-content nopadding">
            <form id="form-wizard" class="form-horizontal" method="post">
              <div id="form-wizard-1" class="step">
                <div class="control-group">
                  <label class="control-label">ชื่อประเภทสินค้า :</label>
                  <div class="controls">
                    <input class="form-control" type="text"  name="Cg_name" id="Cg_name"/>
                    <input  value=เพิ่ม type=submit class="btn btn-success update"  />

                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
          <?php echo form_close(); ?>


          <div class="widget-content nopadding">

            <table class="table  data-table">
            <tr>
              <th>รหัสประเภทสินค้า</th>
              <th>ชื่อประเภทสินค้า</th>
              <th>ลบ</th>
            </tr>
            <?php foreach ($data as $key ): ?>

      													<tbody>
      															<tr>
      															<td><?php echo $key['Cg_Id']; ?></td>
      														  <td><?php echo $key['Cg_name'];?></td>
      															<td><a href="<?php echo site_url('backEnd/category/del/'.$key['Cg_Id'])?>" onclick="return confirm('ยืนยันการลบ !')"><button name="button" class="btn btn-danger">ลบ</button></a></td>
      														</tr>
      													</tbody>
      														<?php endforeach; ?>
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
