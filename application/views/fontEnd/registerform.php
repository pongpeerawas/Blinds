<html>
<head>
  <title>Register Page</title>
</head>
<body>
  <!-- <div class="col-lg-5 col-lg-offset-2">
  <h4>สมัครสมาชิก</h4>
    <?php echo form_open('fontEnd/register'); ?>
  	<table>
        <div class="form-group">
      	<tr>
          	<td>ชื่อ-สกุล : </td>
              <td><input type="text" name="Cus_Name"/></td>
              <td><?php echo form_error('Cus_Name', '<div class="error">', '</div>'); ?></td>
          </tr>
        </div>
          <tr>
          	<td>เบอร์โทรศัพท์ : </td>
              <td><input type="text" name="Cus_Phone"/></td>
              <td><?php echo form_error('Cus_Phone', '<div class="error">', '</div>'); ?></td>
          </tr>
          <tr>
          	<td>อีเมล : </td>
              <td><input type="text" name="Cus_Email"/></td>
              <td><?php echo form_error('Cus_Email', '<div class="error">', '</div>'); ?></td>
          </tr>
          <tr>
            <td>บ้านเลขที่ : </td>
              <td><input type="text" name="Cus_HouseNum"/></td>
              <td><?php echo form_error('Cus_HouseNum', '<div class="error">', '</div>'); ?></td>
          </tr>
          <tr>
            <td>รายละเอียดที่อยู่1 : </td>
              <td><input type="text" name="Cus_District1"/></td>
              <td><?php echo form_error('Cus_District1', '<div class="error">', '</div>'); ?></td>
          </tr>
          <tr>
            <td>รายละเอียดที่อยู่2 : </td>
              <td><input type="text" name="Cus_District2"/></td>
              <td><?php echo form_error('Cus_District2', '<div class="error">', '</div>'); ?></td>
          </tr>
          <tr>
            <td>จังหวัด : </td>
              <td><input type="text" name="Cus_Province"/></td>
              <td><?php echo form_error('Cus_Province', '<div class="error">', '</div>'); ?></td>
          </tr>
          <tr>
            <td>รหัสไปรษณีย์ : </td>
              <td><input type="text" name="Cus_Zipcode"/></td>
              <td><?php echo form_error('Cus_Zipcode', '<div class="error">', '</div>'); ?></td>
          </tr>
          <tr>
            <td>ประเทศ : </td>
              <td><input type="text" name="Cus_Country"/></td>
              <td><?php echo form_error('Cus_Country', '<div class="error">', '</div>'); ?></td>
          </tr>
      </table><br><br>
      <input type="submit" value="Register"/> -->
      <?php echo form_open('fontEnd/register/insert'); ?>
      <?php echo form_open('fontEnd/register/validate'); ?>
      <div class="container" align="center">
                                <div class="row">
                                  <div class="col-md-2 col-sm=2"></div>
                                  <div class="col-md-8">
                                    <h3>ลงทะเบียนสมาชิกใหม่</h3>
                                    <table class="table table-hover" border="0">
                                      <tr>
                                        <td align="right">ชื่อ-นามสกุล :</td>
                                        <td><input type="text" class="form-control" name="Cus_Name" value=""></td>
                                        <td><?php echo form_error('first_name', '<div class="error">', '</div>'); ?></td>
                                      </tr>
                                      <tr>
                                        <td align="right">เบอร์โทรศัพท์ :</td>
                                        <td><input type="text" class="form-control" name="Cus_Phone" value=""></td>
                                      </tr>
                                      <tr>
                                        <td align="right">อีเมล :</td>
                                        <td><input type="text" class="form-control" name="Cus_Email" value=""></td>
                                      </tr>
                                      <tr>
                                        <td align="right">บ้านเลขที่ :</td>
                                        <td><input type="text" class="form-control" name="Cus_HouseNum" value=""></td>
                                      </tr>
                                      <tr>
                                        <td align="right">รายละเอียดที่อยู่1 :</td>
                                        <td><input type="text" class="form-control" name="Cus_District1" value=""></td>
                                      </tr>
                                      <tr>
                                        <td align="right">รายละเอียดที่อยู่2 :</td>
                                        <td><input type="text" class="form-control" name="Cus_District2" value=""></td>
                                      </tr>
                                      <tr>
                                          <td align="right">จังหวัด : </td>
                                          <td>
                                            <select name="Province_Id">
                                            <?php foreach ($province as $key): ?>
                                              <?php if ($data[0]['Province_Id']==$key['Province_Id']): ?>
                                                <option selected value="<?php echo $key['Province_Id']?>"><?php echo $key['province_name'] ?></option>

                                              <?php else: ?>
                                                <option value="<?php echo $key['Province_Id']?>" ><?php echo $key['province_name'] ?></option>

                                              <?php endif; ?>
                                            <?php endforeach; ?>
                                          </td>
																				</tr>
                                      <tr>
                                        <td align="right">รหัสไปรษณีย์ :</td>
                                        <td><input type="text" class="form-control" name="Cus_Zipcode" value=""></td>
                                      </tr>
                                      <tr>
                                        <td align="right">ประเทศ :</td>
                                        <td><input type="text" class="form-control" name="Cus_Country" value=""></td>
                                      </tr>
                                      <!-- <tr>
                                        <td align="right">จังหวัด :</td>
                                          <select name="province_id">
                                            <<?php foreach ($province as $key ): ?>
                                              <?php if ($data[0]['province_id']==$key['province_id']): ?>
                                                <option selected value="<?php echo $key['province_id']?>" ><?php echo $key['province_name'] ?></option>

                                              <?php else: ?>
                                                <option value="<?php echo $key['province_id']?>" ><?php echo $key['province_name'] ?></option>

                                              <?php endif; ?>
                                            <?php endforeach; ?>
                                        </td> -->

                                      <!-- </tr> -->
                                      <tr>
                                        <td align="center" colspan="3"><input class="btn btn-info" type="submit" value="เพิ่ม"></td>
                                      </tr>
                                    </table>
                                  </div>
                                </div>
                              </div>
                              	<?php echo form_close(); ?>
                                <?php echo form_close(); ?>
<!-- </form> -->
<!-- </div> -->
</body>
</html>
