<html>
<head>
  <title>Register Page</title>
</head>
<body>
  <div class="col-lg-5 col-lg-offset-2">
  <h4>สมัครสมาชิก</h4>
  <?php echo validation_errors('<div class="alert-danger">','</div>'); ?>
  <?php if(isset($_SEESION['success'])) {?>
  <div class="alert alert-success"> <?php echo $_SEESION['success'];  ?></div>
    <?php
  } ?>
  <form action="" method="POST">
  <div class="form-group">
    <label for="User_Username" > User: </label>
    <input class="form-control" name="User_Username" id="User_Username" type="text">
  </div>
  <div class="form-group">
    <label for="User_Password"> Password: </label>
    <input class="form-control" name="User_Password" id="User_Password" type="password">
  </div>
  <div class="form-group">
    <label for="Cus_Name"> ชิ่อ-นามสกุล: </label>
    <input class="form-control" name="Cus_Name" id="Cus_Name" type="text">
  </div>
  <div class="form-group">
    <label for="Cus_Phone"> เบอร์โทรศัพท์: </label>
    <input class="form-control" name="Cus_Phone" id="Phone" type="text">
  </div>
  <div class="form-group">
    <label for="Cus_Emial"> อีเมล: </label>
    <input class="form-control" name="Cus_Emial" id="Email" type="text">
  </div>
  <div class="form-group">
    <label for="Cus_HouseNum"> บ้านเลขที่: </label>
    <input class="form-control" name="Cus_HouseNum" id="HouseNum" type="text">
  </div>
  <div class="form-group">
    <label for="Cus_District1"> รายละเอียดที่อยู่1: </label>
    <input class="form-control" name="Cus_District1" id="District1" type="text">
  </div>
  <div class="form-group">
    <label for="Cus_District2"> รายละเอียดที่อยู่2: </label>
    <input class="form-control" name="Cus_District2" id="District2" type="text">
  </div>
  <div class="form-group">
    <label for="Cus_Province"> จังหวัด: </label>
    <input class="form-control" name="Cus_Province" id="Province" type="text">
  </div>
  <div class="form-group">
    <label for="Cus_Zipcode"> รหัสไปรษณีย์: </label>
    <input class="form-control" name="Cus_Zipcode" id="Cus_Zipcode" type="text">
  </div>
  <div class="form-group">
    <label for="Cus_Country"> ประเทศ: </label>
    <input class="form-control" name="Cus_Country" id="Cus_Country" type="text">
  </div>
  <div>
    <button class ="btn btn-primary" name="register">Register</button>
  </div>
</form>
</div>
