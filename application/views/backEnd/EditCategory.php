<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#">Form elements</a> <a href="#" class="current">Form wizard</a> </div>
    <h1>แก้ไขข้อมูลสินค้า</h1>
  </div>
  <?php echo form_open_multipart('backEnd/Category/update');?>

  <div class="container-fluid">
    <hr>

    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
            <h5>แก้ไข</h5>
          </div>
          <div class="widget-content nopadding">
            <form class="form-horizontal" name="form1" method="post">
              <input type="hidden" name="Cg_Id" value="<?php echo $data[0]['Cg_Id'] ?>">

              <div class="control-group">
                <label class="control-label">ชื่อประเภทสินค้า :</label>
                <div class="controls">
                  <input type="text" name="Cg_Name" value="<?php echo $data[0]['Cg_Name'] ?>">
                </div>
              </div>



                <div class="form-actions">

                  <input   value=บันทึก type=submit class="btn btn-success "   class="form-control" />
                </div>
              </form>
              <?php echo form_close();  ?>


            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
