<div class="col-sm-12">


  <div class="panel panel-default">
    <div class="panel-body">


      <div class="row">
        <div class="col-md-6 col-md-offset-3">





          <form   action="save_register.php" method="post">
            <div class="form-horizontal">

              <center><h3>สร้างบัญชีลูกค้าใหม่</h3></center><br>
              <div class="form-group">
                <label for="" class="col-sm-3 control-label">ชื่อเข้าใช้* </label>
                <div class="col-sm-6">
                  <input type="text" name="Username" class="form-control" id="Username"  size="10" required  oninvalid="this.setCustomValidity('กรุณากรอกชื่อผู้ใช้งาน') ">
                </div>
              </div>

              <div class="form-group">
                <label for="" class="col-sm-3 control-label">รหัสผ่าน* </label>
               <div class="col-sm-6">
                 <input type="password" name="Password" class="form-control" id="Password"  size="10" required  oninvalid="this.setCustomValidity('กรุณากรอกรหัสผ่านผู้ใช้') ">
               </div>
              </div>

               <div class="form-group">
                <label for="" class="col-sm-3 control-label">ยืนยันรหัสผ่าน* </label>
                <div class="col-sm-6">
                <input type="password" name="txtConPassword" class="form-control" id="txtConPassword" size="10" >
              </div>
              </div>

              <div class="form-group">
                <label for="exampleInputEmail1" class="col-sm-3 control-label">ชื่อ และ นามสกุล * </label>
              <div class="col-sm-7">
                <input type="text" name="Name" class="form-control" id="Name" size="10"  required  oninvalid="this.setCustomValidity('กรุณากรอกชื่อ สกุล') " />
              </div>
              </div>

                <div class="form-group">
                <label for="exampleInputEmail1" class="col-sm-3 control-label">เบอร์: </label>
                <div class="col-sm-4">
                <input type="text" name="phone" class="form-control" size="10">
                </div>
                </div>

                <div class="form-group">
                <label for="exampleInputEmail1" class="col-sm-3 control-label" >อีเมล์: </label>
                <div class="col-sm-5">
                <input type="text" name="mail" class="form-control" size="10">
                </div>
                </div>

                <div class="form-group">
                <label for="" class="col-sm-3 control-label">บ้านเลขที่ : </label>
                <div class="col-sm-4">
                <input type="text" name="number1" class="form-control"   size="10" equired onkeypress="not_number(event)">
                </div>
                </div>

                  <div class="form-group">
                  <label for="" class="col-sm-3 control-label">ตำบล/แขวง : </label>
                  <div class="col-sm-4">
                    <input type="text" name="district" class="form-control"   size="10">
                  </div>
                  </div>

                <div class="form-group">
                <label for="" class="col-sm-3 control-label">อำเภอ/เขต : </label>
                <div class="col-sm-4">
                <input type="text" name="district1" class="form-control"  size="10">
                </div>
                </div>

                <div class="form-group">
                <label for="" class="col-sm-3 control-label">จังหวัด :</label>
                <div class="col-sm-4">
                <input type="text" name="province" class="form-control" size="50">
              </div>
              </div>

              <div class="form-group">
                <label for="" class="col-sm-3 control-label">รหัสไปรษณีย์ :</label>
                <div class="col-sm-4">
                <input type="text" name="zipcode" class="form-control"   size="50">
              </div>
              </div>

              <div class="form-group">
                <label for="" class="col-sm-3 control-label" >ประเทศ :</label>
                <div class="col-sm-4">
                <input type="text" name="country" class="form-control"   size="50">
              </div>
              </div>
              <br><br>

                <div class="form-group">
                  <center>
                    <div class="g-recaptcha" data-sitekey="6LdvBTQUAAAAADjH_4OVT5HfBx0MD3pk2qOXxX6S"></div>
                    <br/>
                    <a href="index.php"><button  type="button" class="btn btn-danger" data-dismiss="modal">ยกเลิก</button></a>

                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;


                <input  type="submit" name="btn" class="btn btn-primary" value="สมัคร">
              </center>
                </div>


        </div>

        </form>


      </div>
    </div>







  </div>
</div>





</div>
