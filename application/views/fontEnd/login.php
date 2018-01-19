
<!-- <!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Resi Bootstrap Template</title>


  <link href="<?php echo base_url('asset/css/bootstrap.min.css') ?>" rel="stylesheet" />
	<link href="<?php echo base_url('asset/css/responsive-slider.css') ?>" rel="stylesheet" />
	<link href="<?php echo base_url('asset/css/animate.css') ?>" rel="stylesheet" />
  <link href="<?php echo base_url('asset/css/font-awesome.min.css') ?>" rel="stylesheet" />
  <link href="<?php echo base_url('asset/css/style.css') ?>" rel="stylesheet" />



  </head>

  <body>

    <header>
		<div class="container">
			<div class="row">
				<nav class="navbar navbar-default" role="navigation">
					<div class="container-fluid">
						<div class="navbar-header">
							<div class="navbar-brand">
								<a href="index.html"><h1>Resi</h1></a>
							</div>
						</div>
						<div class="menu">
							<ul class="nav nav-tabs" role="tablist">
								<li role="presentation" ><a href="index.html">Home</a></li>
								<li role="presentation"><a href="feature.html">Feature</a></li>
								<li role="presentation"><a href="blog.html">Blog</a></li>
								<li role="presentation"><a href="portfolio.html">Portfolio</a></li>
								<li role="presentation" class="active"><a href="<?php echo site_url('fontEnd/login/pageLogin'); ?>">เข้าสู่ระบบ</li>

							</ul>
						</div>
					</div>
				</nav>
			</div>
		</div>
	</header> -->



<!--หน้าหาส่วนกลาง-->
      <div class="col-sm-12">


        <div class="panel panel-default">
  				<div class="panel-body">


          <div class="row">
  <div class="col-md-6 col-md-offset-3">


            <form class="form-horizontal" method="post" action="check_login.php">
                      <center>
                        <h3>เข้าสู่ระบบ</h3><br/>
                      <label>
                            ไม่มีบัญชีผู้ใช้งาน?
                          &nbsp; &nbsp; <a href="<?php echo site_url('fontEnd/register'); ?>"><strong style="color:Red"><U>ลงทะเบียน</U></strong></a>
                      </label>
                      </center>
                      <br/>
                      <div class="form-group">
                      <label for="inputEmail3" class="col-sm-4 control-label">Username:</label>
                      <div class="col-sm-6">
                      <input type="text" name="txtUsername" class="form-control" id="txtUsername" placeholder="Username">
                      </div>
                      </div>
                      <div class="form-group">
                      <label for="inputPassword3" class="col-sm-4 control-label">Password:</label>
                      <div class="col-sm-6">
                      <input type="password" name="txtPassword" class="form-control" id="txtPassword" placeholder="Password">
                      </div>
                      </div>
                      <div class="form-group">
                      <div class="col-sm-offset-4">
                      <div class="checkbox">
                      <!-- <label>
                      <input type="checkbox" name="chk" id="chk" value="on"> จำฉันไว้ในระบบ
                      </label> -->

                      </div>
                      </div>
                      </div>
                      <div class="form-group">
                     <center>
                      <button type="submit" class="btn btn-default">เข้าสู่ระบบ</button>
                      </center>

                  </div>
                </form>


            </div>
</div>







      </div>
    </div>





      </div>
    </div>
  <!--จบเนื้อหาส่วนกลาง-->
