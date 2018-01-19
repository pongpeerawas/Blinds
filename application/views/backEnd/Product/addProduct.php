<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#">Form elements</a> <a href="#" class="current">Form wizard</a> </div>
    <h1>จัดการข้อมูลสินค้า</h1>
  </div>
  <div class="container-fluid">
    <hr>
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">

          <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
            <h5>เพิ่มสินค้า</h5>
          </div>
            <?php echo form_open_multipart('backEnd/product/insert'); ?>
          <div class="widget-content nopadding">
            <form action="#" method="get" class="form-horizontal">

              <div class="control-group">
                <label class="control-label">ชื่อสินค้า :</label>
                <div class="controls">
                  <input type="text" name="Pro_Name" id="Pro_Name" class="span4" />
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">รายละเอียด :</label>
                <div class="controls">
                  <textarea name="Pro_Detail" id="Pro_Detail" rows="4" cols="30" class="span6"></textarea>
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">ประเภทสินค้า :</label>

                  <select name="Cg_Id">
                    <<?php foreach ($product as $key ): ?>
                      <?php if ($data[0]['Cg_Id']==$key['Cg_Id']): ?>
                        <option selected value="<?php echo $key['Cg_Id']?>" ><?php echo $key['Cg_name'] ?></option>

                      <?php else: ?>
                        <option value="<?php echo $key['Cg_Id']?>" ><?php echo $key['Cg_name'] ?></option>

                      <?php endif; ?>
                    <?php endforeach; ?>

                <div class="controls">

                </select>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">จำนวนสินค้า :</label>
              <div class="controls">
                <input type="text"  name="Pro_Amount" id="Pro_Amount" class="span1" onkeypress="return noNumbers(event)"><br>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">ราคา :</label>
              <div class="controls">
                <input type="text"  name="Pro_Price" id="Pro_Price" class="span2"  onkeypress="return noNumbers(event)">&nbsp; บาท
                <span class="help-block"></span> </div>
              </div>
              <div class="control-group">
                <label class="control-label">รูปสินค้า :</label>
                <div class="controls">
                <input type="file"   name="Pro_Pic" class="btn btn-primary">


                </div>
              </div>
              <div class="form-actions">

                <input   value=เพิ่ม type=submit class="btn btn-success "   class="form-control" />

              </div>
            </form>
            <?php echo form_close(); ?>

          </div>
        </div>
      </div>
    </div>






  </div>


</div>
