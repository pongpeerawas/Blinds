<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#">Form elements</a> <a href="#" class="current">Form wizard</a> </div>
    <h1>แก้ไขข้อมูลสินค้า</h1>
  </div>
  <?php echo form_open_multipart('backEnd/product/update');?>

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
              <input type="hidden" name="Pro_Id" value="<?php echo $data[0]['Pro_Id'] ?>">

              <div class="control-group">
                <label class="control-label">ชื่อสินค้า :</label>
                <div class="controls">
                  <input type="text" name="Pro_Name" value="<?php echo $data[0]['Pro_Name'] ?>">
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">รายละเอียด :</label>
                <div class="controls">
                  <textarea class="span6" type="text" name="Pro_Detail" rows="10" cols="30"><?php echo $data[0]['Pro_Detail'] ?></textarea>
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">ประเภทสินค้า :</label>
                <div class="controls">
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
                  <input class="span1" type="text" name="Pro_Amount" value="<?php echo $data[0]['Pro_Amount'] ?>">&nbsp; ชุด
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">ราคา :</label>
                <div class="controls">
                  <input  class="span1" type="text" name="Pro_Price" value="<?php echo $data[0]['Pro_Price'] ?>" >&nbsp; ฿
                  <span class="help-block"></span> </div>
                </div>
                <div class="control-group">
                  <label class="control-label">รูปสินค้าเดิม :</label>
                  <div class="controls">

                    <img src="<?php echo base_url('assetAdmin/img/'.$data[0]['Pro_Pic']) ?>" style=" height: 200px;"><br>


                  </div>
                  <label class="control-label">อัพรูปสินค้าใหม่ :</label>
                  <div class="controls">
                    <input type="file" name="Pro_Pic" >
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
