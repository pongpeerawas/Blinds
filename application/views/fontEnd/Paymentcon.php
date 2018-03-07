  <div class="container-fluid">
    <hr>

    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
            <h2>แจ้งชำระสินค้า</h2>
          </div>
          <div class="widget-content nopadding">
            <form class="form-horizontal" name="form1" method="post">
              <input type="hidden" name="Pc_Id" value="<?php echo $data[0]['Pc_Id'] ?>">

              <div class="control-group">
                <label class="control-label">ชื่อลูกค้า :</label>
                <div class="controls">
                  <input type="text" name="Name" value="<?php echo $data[0]['Cus_Id'] ?>">
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">ธนาคาร :</label>
                <div class="controls">
                  <input type="radio" name="[Pc_Bank]" value="[value]">ธนาคารกรุงไทย 443-0-474330
                  <input type="radio" name="[Pc_Bank]" value="[value]">ธนาคารกสิกรไทย 441-3-105201
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">จำนวนเงิน :</label>
                <div class="controls">
                  <input class="span1" type="text" name="Pc_Price" value="<?php echo $data[0]['Pc_Price'] ?>">&nbsp; บาท
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">เลขที่ใบสั่งซื้อ :</label>
                <div class="controls">
                  <input  class="span1" type="text" name="Order_Id" value="<?php echo $data[0]['Order_Id'] ?>" >
                  <span class="help-block"></span> </div>
                </div>
                <div class="control-group">
                  <label class="control-label">รายละเอียดเพิ่มเติม :</label>
                  <div class="controls">
                    <textarea class="span2" type="text" name="Pc_Detail" value="<?php echo $data[0]['Pc_Detail'] ?>"> </textarea>
                    <span class="help-block"></span> </div>
                  </div>

              <div class="control-group">
                  <label class="control-label">อัพรูปสินค้าใหม่ :</label>
                  <div class="controls">
                    <input type="file" name="Pc_Pic" >
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
