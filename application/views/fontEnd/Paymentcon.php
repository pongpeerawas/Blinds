

</div>
<section class="main">
  <div class="container" >
    <div class="breadcrumb ">
      <li><a href="<?php echo site_url('');?>">หน้าแรก</a></li>
      <li ><a href="<?php echo base_url();?>index.php/fontEnd/Customer/single_history">รายการสั่งซื้อสินค้า</a></li>
      <li class="active">แจ้งชำระสินค้า</li>

    </div>
    <section class="tab-content">

      <section class="tab-pane active fade in content" id="dashboard">
        <div class="row">
          <div class="col-xs-12 ">
            <div class="panel panel-default">
              <div class="widget-box">
                <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
                  <h2>แจ้งชำระสินค้า</h2>
                </div>
                <?php echo form_open_multipart('fontEnd/PaymentConfirm/savePaycon');?>

                <?php foreach ($order as $row): ?>
                  <div class="widget-content nopadding">
                    <form class="form-horizontal" name="form1" method="post">
                      <div class="control-group">
                        <label class="control-label">เลขที่ใบสั่งซื้อ :</label>
                        <div class="controls">
                          <input  class="span1" type="text" name="Order_Id" value="<?php echo $row->Order_Id;?>"  readonly>
                          <span class="help-block"></span> </div>
                        </div>
                      <?php endforeach;?>


                      <div class="control-group">
                        <label class="control-label">ชื่อลูกค้า :</label>
                        <div class="controls">
                          <input type="text" name="Name" value="<?php echo $this->session->userdata('name');?>" readonly>
                        </div>
                      </div>

                      <div class="control-group">
                        <label class="control-label">ธนาคาร :</label>
                        <div class="controls">
                          <input type="radio" name="Pc_Bank" value="ธนาคารกรุงไทย 443-0-474330" required>ธนาคารกรุงไทย 443-0-474330 <br>
                          <input type="radio" name="Pc_Bank" value="ธนาคารกสิกรไทย 441-3-105201"required>ธนาคารกสิกรไทย 441-3-105201
                        </div>
                      </div>
                      <?php foreach ($order as $row): ?>
                        <div class="control-group">
                          <label class="control-label">จำนวนเงิน :</label>
                          <div class="controls">
                            <input class="span1" type="text" name="Pc_Price" value="<?php echo $row->Order_sumPrice;?>" readonly>&nbsp; บาท
                          </div>
                        </div>
                      <?php endforeach;?>

                      <div class="control-group">
                        <label class="control-label">รายละเอียดเพิ่มเติม :</label>
                        <div class="controls">
                          <textarea class="span2" type="text" name="Pc_Detail" value=""> </textarea>
                          <span class="help-block"></span> </div>
                        </div>

                        <div class="control-group">
                          <label class="control-label">อัพรูปสินค้าใหม่ :</label>
                          <div class="controls">
                            <input type="file" name="Pc_Pic" required >
                          </div>
                        </div>
                        <div class="form-actions">

                          <input   value=บันทึก type=submit class="btn btn-success "   class="form-control" />
                        </div>
                      </form>
                      <?php echo form_close(); ?>


                    </div>
                  </div>
                </div>
              </div>

            </section>


          </section>



        </div>
      </section>
