<div class="container">
  <div class="row">
    <!--สไลค์-->
    <div class="col-sm-12s">
      <div class="panel panel-default">
        <div class="panel-body">


          <div class="row">


            <!--จบสไลค์-->



            <div class="col-sm-12">
              <ol class="breadcrumb">
                <li><a href="<?php echo site_url('');?>">หน้าแรก</a></li>
                <li class="active">รายการสั่งซื้อสินค้า</li>
              </ol>
            </div>

            <!--หน้าหาส่วนกลาง-->
            <div class="col-sm-12">


              <!--้าสินค้า-->
              <div class="row">
                <div class=" col-md-12">
                  <div class="panel panel-default">
                    <div class="wow bounceIn" data-wow-offset="0" data-wow-delay="1.3s">
                      <div class="list-group">

                        <div class="panel-body"><center><h3>รายการสั่งซื้อสินค้าของคุณ</h3></center><br>

                          <table id="example" class="table table-bordered table-striped" style="text-align: center">
                            <thead class="text-center">
                              <tr>
                                <td>เลขที่ใบสั่งซื้อ </td>
                                <td>วันที่สั่งซื้อ </td>
                                <td>ราคารวม </td>
                                <td>ชำระเงินผ่าน  </td>
                                <td>สถานะการจัดส่งสินค้า </td>
                                <td>สถานะการชำระเงิน </td>
                                <td>รายละเอียด </td>
                              </tr>
                            </thead>
                            <tbody>

                              <?php
                              if($history == true){

                                foreach ($history as $row): ?>

                                <tr>
                                  <td>
                                    <?php echo $row->Order_Id;?>

                                  </td>
                                  <td> <?php echo $row->Order_datetime;?></td>
                                  <td><?php echo $row->Order_sumPrice;?> บาท</td>
                                  <td>
                                    <?php if ($row->Order_Paystatus  == "ยังไม่ชำระเงิน") { ?>
                                      <!-- <a href="<?php echo base_url()?>index.php/fontEnd/Payment/pay  " >   <button class="btn btn-primary" >จ่ายตัง </button></a> -->
                                      <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
                                        <input type="image" src="https://www.paypalobjects.com/th_TH/i/btn/btn_paynowCC_LG.gif" border="0" name="submit" alt="PayPal - วิธีชำระเงินแบบออนไลน์ที่ปลอดภัยกว่าและง่ายกว่า!">
                                        <img alt="" border="0" src="https://www.paypalobjects.com/th_TH/i/scr/pixel.gif" width="2" height="2">
                                        <input type="hidden" name="cmd" value="_s-xclick">
                                        <input type="hidden" name="hosted_button_id" value="2NMDX4ZQ72P92">
                                        <input Type="Hidden" Name="inv" value="<?php echo $row->Order_Id; ?>"/>
                                        <input Type="Hidden" Name="amt" value="<?php echo $row->Order_sumPrice; ?>"/>

                                      </form>

                                    <?php } else { ?>
                                      <big style="color:Green"><span class="glyphicon glyphicon-ok"></span> ชำระเงินแล้ว </big>
                                    <?php } ?>
                                  </td>
                                  <td>  <?php if ($row->Order_Shipping  == "ยังไม่จัดส่ง") { ?>

                                      <span class="badge badge-warning" style="color:Yellow"><?php echo $row->Order_Shipping;?></span>

                                    <?php } else { ?>
                                      <span class="badge badge-info" style="color:Green"><span class="glyphicon glyphicon-ok"></span> จัดส่งสินค้าแล้ว </span>
                                    <?php } ?>
                                  </td>
                                  <td>
                                    <?php if ($row->Order_PayConStatus  == "ยังไม่แจ้งชำระเงิน") { ?>
                                      <a href="<?php echo base_url()?>index.php/fontEnd/PaymentConfirm/single_Paycon?id=<?php echo $row->Order_Id ?>">
                                        <button class="btn btn-danger" ><span class="glyphicon glyphicon-duplicate"></span><?php echo $row->Order_PayConStatus;?></button></a>
                                      <?php } elseif ($row->Order_PayConStatus  == "รอการตรวจสอบ")  { ?>
                                        <span style="color:Yellow"> รอการตรวจสอบ </span>
                                      <?php } else { ?>
                                        <span style="color:Green"><span class="glyphicon glyphicon-ok"></span> แจ้งชำระเงินแล้ว </span>
                                      <?php } ?>

                                    </td>

                                    <td>
                                      <a href="<?php echo base_url()?>index.php/fontEnd/Customer/single_OrderDetail?id=<?php echo $row->Order_Id ?>">
                                        <button class="btn btn-primary" ><span class="glyphicon glyphicon-duplicate"></span> รายละเอียด  </button>
                                      </a>
                                    </td>
                                  </tr>
                                <?php endforeach;

                                ?>
                              <?php }else{
                                echo "";

                              } ?>
                            </tbody>

                          </table>











                        </div>
                      </div>
                    </div>
                  </div>

                </div>
                <!-- จบสินค้า-->

                <!--ตะกร้าสินค้า-->
                <div class="col-xs-8 col-sm-3">


                  <div class="panel-body">

                    <ul class="list-group">
                      <li class="list-group-item"><a href="history.php"> รายการสั่งซื้อสินค้า </a></li>
                      <li class="list-group-item"><a href="edituser.php"> ประวัติส่วนตัว </a></li>

                    </ul>
                  </div></div>


                </div>
              </div>





            </div>







          </div>
        </div>
      </div>
    </div>
  </div>
