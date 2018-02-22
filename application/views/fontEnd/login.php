

<!--หน้าหาส่วนกลาง-->
      <div class="col-sm-12">

        <div class="breadcrumb">
            <h4>เข้าสู่ระบบ</h4>
        </div>
        <!-- <div class="panel panel-default"> -->
  				<div class="panel-body">


          <div class="row">
            <div class="col-md-6 col-md-offset-3">


                      <center>

                      <label>
                            ไม่มีบัญชีผู้ใช้งาน?
                          &nbsp; &nbsp; <a href="<?php echo site_url('fontEnd/Register'); ?>"><strong style="color:Red"><U>ลงทะเบียน</U></strong></a>
                      </label>
                      </center>
                      <br/>
                         <?= validation_errors() ?>
                         <?= $this->session->flashdata('error') ?>
                      <?php echo form_open('fontEnd/Login'); ?>


                      <div class="form-group">
                      <label for="inputEmail3" class="col-sm-4 control-label">Username:</label>
                      <div class="col-sm-6">
                        <input type="text" name="username" class="form-control" />
                      </div>
                      </div>
                      <div class="form-group">
                      <label for="inputPassword3" class="col-sm-4 control-label">Password:</label>
                      <div class="col-sm-6">
                        <input type="password" name="password" class="form-control" />
                      </div>
                      </div>
                        <br>
                      <div class="form-group">
                     <center>
                       <button type="submit" class="btn btn-success">Login</button>
                       <!-- <?=  anchor(base_url(),'Cancel',['class'=>'btn']) ?> -->
                      </center>

                  </div>
                  <?php echo form_close(); ?>



            </div>
</div>







      </div>
    </div>





      </div>
 </body>
 </html>
