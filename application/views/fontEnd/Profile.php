
<body>
  <?php
  $i = 0;
  $cart_session = @$this->session->userdata('cart_session');
  ?>

  <div class="container" align="center">
    <div class="row">
      <?php foreach ($editProfile as $row): ?>


        <div class=" col-md-6 ">

          <div class="panel panel-default">
            <div class="panel-heading">
              <strong>ข้อมูลส่วนตัว</strong>
            </div>
            <table class="table table-hover" border="0">
              <tr>
                <td align="right"><label>ชื่อเข้าใช้ :</label></td>
                <td align="left"><?php echo $row->Cus_Username ?></td>
              </tr>
              <tr>
                <td align="right"><label>รหัสผ่าน :</label></td>
                <td align="left">
                  <input type="password" style="border:none" name="Cus_Password" value="<?php echo $row->Cus_Password ?>" readonly required>
                </td>
              </tr>
              <tr>
                <td align="right"><label>ชื่อ-สกุล :</label></td>
                <td align="left"><?php echo $row->Cus_Name ?></td>
              </tr>
              <tr>
                <td align="right"><label>เบอร์โทรศัพท์ :</label></td>
                <td align="left"><?php echo $row->Cus_Phone ?></td>
              </tr>
              <tr>
                <td align="right"><label>อีเมลล์ :</label></td>
                <td align="left"><?php echo $row->Cus_Email ?></td>
              </tr>
              <tr>
                <td align="right"><label>ที่อยู่ :</label></td>
                <td align="left"><?php echo $row->Cus_District ?></td>
              </tr>
              <tr>
                <td align="right"><label>จังหวัด :</label></td>
                <td align="left"><?php echo $row->Cus_Province ?></td>
              </tr>
              <tr>
                <td align="center" colspan="3"><input class="btn btn-default" type="submit" value="แก้ไขข้อมูล" id="submit"></td>

              </tr>

            </table>
          </div>
        </div>
      </div>
    </div>


  <?php endforeach;?>


  <hr>


  <?php echo form_open('fontEnd/Customer/update');?>

  <?php foreach ($editProfile as $row): ?>
    <form action="" method="post">
      <div class="modal fade bs-example-modal-sm modal-alert" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">

        <div class="modal-dialog modal-sm" style="width:50%">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&#215;</button>
              <h3>แก้ไขข้อมูล</h3>
            </div>

            <div class="modal-body">
              <div class="row-fluid">
                <div class="span10 offset1">
                  <div id="modalTab">
                    <div class="tab-content">
                      <div class="tab-pane active" id="about">


                        <div class="form-group">
                          <input type="hidden" class="form-control" name="Cus_Id" value="<?php echo $row->Cus_Id ?>" required>

                          <!-- <label for="name">ชื่อเข้าใช้ :</label>
                          <input type="text" class="form-control" name="Cus_Username" value="<?php echo $row->Cus_Username ?>" required> -->
                        </div>
                        <div class="form-group">
                          <label for="email">รหัสผ่านเดิม :</label>
                          <input type="text" class="form-control" name="" value="<?php echo $row->Cus_Password ?>" readonly>
                        </div>
                        <div class="form-group">
                          <label for="email">รหัสผ่านใหม่ :</label>
                          <input type="password" class="form-control" name="Cus_Password" value="<?php echo $row->Cus_Password ?>" required >
                        </div>
                        <div class="form-group">
                          <label for="phone">ชื่อ-สกุล :</label>
                          <input type="text" class="form-control" name="Cus_Name" value="<?php echo $row->Cus_Name ?>" required>
                        </div>
                        <div class="form-group">
                          <label for="phone">เบอร์โทรศัพท์ :</label>
                          <input type="text" class="form-control" name="Cus_Phone" value="<?php echo $row->Cus_Phone ?>" required|min_length[10]|>
                        </div>
                        <div class="form-group">
                          <label for="phone">อีเมลล์ :</label>
                          <input type="email" class="form-control" name="Cus_Email" value="<?php echo $row->Cus_Email ?>" required>
                        </div>
                        <div class="form-group">
                          <label for="address">ที่อยู่ :</label>
                          <input type="text" class="form-control" name="Cus_District" value="<?php echo $row->Cus_District ?>" required>

                        </div>
                        <div class="form-group">
                          <label for="Cus_Province">จังหวัด :</label>
                          <select name="Cus_Province" value="<?php echo $row->Cus_Province ?>"   required>
                            <option value="<?php echo $row->Cus_Province ?>" ><?php echo $row->Cus_Province ?></option>
                            <option value="กรุงเทพมหานคร">กรุงเทพมหานคร</option>
                            <option value="กระบี่">กระบี่ </option>
                            <option value="กาญจนบุรี">กาญจนบุรี </option>
                            <option value="กาฬสินธุ์">กาฬสินธุ์ </option>
                            <option value="กำแพงเพชร">กำแพงเพชร </option>
                            <option value="ขอนแก่น">ขอนแก่น</option>
                            <option value="จันทบุรี">จันทบุรี</option>
                            <option value="ฉะเชิงเทรา">ฉะเชิงเทรา </option>
                            <option value="ชัยนาท">ชัยนาท </option>
                            <option value="ชัยภูมิ">ชัยภูมิ </option>
                            <option value="ชุมพร">ชุมพร </option>
                            <option value="ชลบุรี">ชลบุรี </option>
                            <option value="เชียงใหม่">เชียงใหม่ </option>
                            <option value="เชียงราย">เชียงราย </option>
                            <option value="ตรัง">ตรัง </option>
                            <option value="ตราด">ตราด </option>
                            <option value="ตาก">ตาก </option>
                            <option value="นครนายก">นครนายก </option>
                            <option value="นครปฐม">นครปฐม </option>
                            <option value="นครพนม">นครพนม </option>
                            <option value="นครราชสีมา">นครราชสีมา </option>
                            <option value="นครศรีธรรมราช">นครศรีธรรมราช </option>
                            <option value="นครสวรรค์">นครสวรรค์ </option>
                            <option value="นราธิวาส">นราธิวาส </option>
                            <option value="น่าน">น่าน </option>
                            <option value="นนทบุรี">นนทบุรี </option>
                            <option value="บึงกาฬ">บึงกาฬ</option>
                            <option value="บุรีรัมย์">บุรีรัมย์</option>
                            <option value="ประจวบคีรีขันธ์">ประจวบคีรีขันธ์ </option>
                            <option value="ปทุมธานี">ปทุมธานี </option>
                            <option value="ปราจีนบุรี">ปราจีนบุรี </option>
                            <option value="ปัตตานี">ปัตตานี </option>
                            <option value="พะเยา">พะเยา </option>
                            <option value="พระนครศรีอยุธยา">พระนครศรีอยุธยา </option>
                            <option value="พังงา">พังงา </option>
                            <option value="พิจิตร">พิจิตร </option>
                            <option value="พิษณุโลก">พิษณุโลก </option>
                            <option value="เพชรบุรี">เพชรบุรี </option>
                            <option value="เพชรบูรณ์">เพชรบูรณ์ </option>
                            <option value="แพร่">แพร่ </option>
                            <option value="พัทลุง">พัทลุง </option>
                            <option value="ภูเก็ต">ภูเก็ต </option>
                            <option value="มหาสารคาม">มหาสารคาม </option>
                            <option value="มุกดาหาร">มุกดาหาร </option>
                            <option value="แม่ฮ่องสอน">แม่ฮ่องสอน </option>
                            <option value="ยโสธร">ยโสธร </option>
                            <option value="ยะลา">ยะลา </option>
                            <option value="ร้อยเอ็ด">ร้อยเอ็ด </option>
                            <option value="ระนอง">ระนอง </option>
                            <option value="ระยอง">ระยอง </option>
                            <option value="ราชบุรี">ราชบุรี</option>
                            <option value="ลพบุรี">ลพบุรี </option>
                            <option value="ลำปาง">ลำปาง </option>
                            <option value="ลำพูน">ลำพูน </option>
                            <option value="เลย">เลย </option>
                            <option value="ศรีสะเกษ">ศรีสะเกษ</option>
                            <option value="สกลนคร">สกลนคร</option>
                            <option value="สงขลา">สงขลา </option>
                            <option value="สมุทรสาคร">สมุทรสาคร </option>
                            <option value="สมุทรปราการ">สมุทรปราการ </option>
                            <option value="สมุทรสงคราม">สมุทรสงคราม </option>
                            <option value="สระแก้ว">สระแก้ว </option>
                            <option value="สระบุรี">สระบุรี </option>
                            <option value="สิงห์บุรี">สิงห์บุรี </option>
                            <option value="สุโขทัย">สุโขทัย </option>
                            <option value="สุพรรณบุรี">สุพรรณบุรี </option>
                            <option value="สุราษฎร์ธานี">สุราษฎร์ธานี </option>
                            <option value="สุรินทร์">สุรินทร์ </option>
                            <option value="สตูล">สตูล </option>
                            <option value="หนองคาย">หนองคาย </option>
                            <option value="หนองบัวลำภู">หนองบัวลำภู </option>
                            <option value="อำนาจเจริญ">อำนาจเจริญ </option>
                            <option value="อุดรธานี">อุดรธานี </option>
                            <option value="อุตรดิตถ์">อุตรดิตถ์ </option>
                            <option value="อุทัยธานี">อุทัยธานี </option>
                            <option value="อุบลราชธานี">อุบลราชธานี</option>
                            <option value="อ่างทอง">อ่างทอง </option>
                            <option value="อื่นๆ">อื่นๆ</option>
                          </select>
                        </div>



                        <hr>
                        <div class="row" style="margin-top:10px">
                          <div class="col-xs-12 form-group">
                            <button type="button" class="btn btn-warning RbtnMargin pull-right" data-dismiss="modal">Close</button>
                            &nbsp;
                            <button type="submit" class="btn btn-success pull-right">Submit</button>
                          </div>
                        </div>

                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>


    </form>

      <?php endforeach;?>

  </body>
