<section class="main">
  <div class="container" align="">
    <div class="breadcrumb ">
      <li><a href="<?php echo site_url('');?>">หน้าแรก</a></li>
      <li ><a href="<?php echo base_url();?>index.php/fontEnd/Cart/getCart">รายการสั่งซื้อสินค้า</a></li>
      <?php foreach ($pay as $row): ?>

        <li class="active">ใบสั่งซื้อสินค้า : <?php echo $row->Order_Id  ?></li>

      </div>
      <section class="tab-content">

        <section class="tab-pane active fade in content" id="dashboard">
          <div class="row">
            <div class="col-xs-12 ">
              <div class="panel panel-default">
                <div class="panel-heading">


                <?php endforeach;?>

                <?= $this->session->flashdata('error_msg') ?><br/>
                <?= $this->session->flashdata('success_msg') ?><br/>
                <table class="table table-responsive"  border="0">
                  <thead>
                    <tr>
                      <td  style="text-align: left">
                      <h1>  ใบสั่งซื้อสินค้า : <?php echo $row->Order_Id  ?></h1>
                      <br><br>
                    </td>
                    <td></td>
                    <td  style="text-align: right">
                      <br>
                      <button class="btn btn-primary" onclick="">พิมพ์ใบเสร็จ</button>

                    </td>
                    </tr>
                    <tr>
                      <th style="text-align: left">รายละเอียด
                      </th>
                      <th style="width: 100px;text-align: center;">จำนวน</th>
                      <th style="text-align: center">ราคาต่อหน่วย</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach ($orderlist as $row): ?>

                      <tr>
                        <td style="text-align: left">
                          <img src="<?php echo base_url() ?>assetAdmin/img/<?php echo $row->Pro_Pic ?>" style="height: 170px;"><br>
                          <?php echo $row->Pro_Name;?>
                          <br>
                          <br>
                        </td>
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
                    <tr>
                      <td style="text-align: left"> <br><br><br><button class="btn btn-danger" onclick="window.history.back()"> < กลับ</button></td>
                      <td></td>
                      <td style="text-align: right">
                        <form method="post" class="form-horizontal" role="form" action="<?= base_url() ?>index.php/paypal/create_payment_with_paypal">

                          <?php foreach ($pay as $row): ?>
                            <!-- <button type="submit"><img src="https://www.paypalobjects.com/webstatic/en_AU/i/buttons/btn_paywith_primary_l.png" ></button> -->
                            <input type="image" src="https://www.paypalobjects.com/webstatic/en_AU/i/buttons/btn_paywith_primary_l.png" alt="Submit">
                            <input name="Order_Id" type="hidden" value="<?php echo $row->Order_Id ?>">
                            <input title="item_name" name="item_name" type="hidden" value="<?php echo $row->Order_Id ?>">
                            <input title="item_number" name="item_number" type="hidden" value="-">
                            <input title="item_description" name="item_description" type="hidden" value="-">
                            <input title="item_tax" name="item_tax" type="hidden" value="1">
                            <input title="item_price" name="item_price" type="hidden" value="<?php echo $row->Order_sumPrice?>">
                            <input title="details_tax" name="details_tax" type="hidden" value="0">
                            <input title="details_subtotal" name="details_subtotal" type="hidden" value="<?php echo $row->Order_sumPrice ?>">

                          <?php endforeach; ?>

                        </form>


                      </td>


                    </tr>
                  </tbody>
                </table>


              </div>
            </div>
          </div>

        </section>


      </section>



    </div>
  </section>


</div>
