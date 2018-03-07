<section class="main">
  <div class="container" align="">
  <div class="breadcrumb ">
    <li><a href="<?php echo site_url('');?>">หน้าแรก</a></li>
    <li ><a href="<?php echo base_url();?>index.php/fontEnd/Cart/getCart">ตะกร้าสินค้า</a></li>
    <li class="active">สรุปการสั่งซื้อ</li>

  </div>
  <section class="tab-content">

    <section class="tab-pane active fade in content" id="dashboard">
      <div class="row">
        <div class="col-xs-12 ">
          <div class="panel panel-default">
            <div class="panel-heading">

              <h2 style="text-align: center">รายละเอียดการสั่งซื้อ</h2>
              &nbsp;<h3 style="text-align: left">สถานที่จัดส่งสินค้า</h3>
                <table class="table table-responsive" style="text-align: left">

                  <tr>
                    <?php foreach ($shipping as $row): ?>

                    <td>ชื่อ-สกุล :  </td>
                    <td><?php echo $row->Ship_Name	;?></td>

                  </tr>
                  <tr>
                    <td>ที่อยู่ :</td>
                    <td><?php echo $row->Ship_District;?></td>

                  </tr>
                  <tr>
                      <td>จังหวัด: </td>
                      <td><?php echo $row->Ship_Province;?></td>

                    </tr>
                    <?php endforeach;?>
                </table>

              <hr>
              <!--    ---------------------------------------------------------------------------------------------------------------->
              &nbsp;<h3 style="text-align: left">รายละเอียดสินค้า</h3>

              <table class="table table-responsive" style="text-align: center" border="0">
                <thead>
                  <tr>
                    <th style="text-align: center">รูปภาพ</th>
                    <!-- <th style="text-align: center">รหัสสินค้า</th> -->
                    <th style="text-align: center">ชื่อสินค้า</th>
                    <th style="width: 100px;text-align: center;">จำนวน</th>
                    <th style="text-align: center">ราคา</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach ($orderlist as $row): ?>

                    <tr>
                      <td><img src="<?php echo base_url() ?>assetAdmin/img/<?php echo $row->Pro_Pic ?>" style=" height: 170px;"></td>
                      <td><?php echo $row->Pro_Name;?></td>
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

                </tbody>
              </table>
              <button class="btn btn-danger" onclick="window.history.back()"> < กลับ</button>





            </div>
          </div>
        </div>

      </section>


    </section>



</div>
  </section>
