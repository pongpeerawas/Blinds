
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
                <td align="right">ชื่อเข้าใช้ :</td>
                <td align="left"><?php echo $row->Cus_Username ?></td>
              </tr>
              <tr>
                <td align="right">รหัสผ่าน :</td>
                <td align="left"><?php echo $row->Cus_Password ?></td>
              </tr>
              <tr>
                <td align="right">ชื่อ-สกุล :</td>
                <td align="left"><?php echo $row->Cus_Name ?></td>
              </tr>
              <tr>
                <td align="right">เบอร์โทรศัพท์ :</td>
                <td align="left"><?php echo $row->Cus_Phone ?></td>
              </tr>
              <tr>
                <td align="right">อีเมลล์ :</td>
                <td align="left"><?php echo $row->Cus_Email ?></td>
              </tr>


          <tr>
            <td align="right">ที่อยู่ :</td>
            <td align="left"><?php echo $row->Cus_District ?></td>
          </tr>
          <tr>
            <td align="right">จังหวัด :</td>
            <td align="left"><?php echo $row->Cus_Province ?></td>
          </tr>
          <tr>
            <td align="right">รหัสไปรษณีย์ :</td>
            <td align="left"><?php echo $row->Cus_Zipcode ?></td>
          </tr>
          <tr>
            <td align="right">ประเทศ :</td>
            <td align="left"><?php echo $row->Cus_Country ?></td>
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




</body>
<form action="" method="post">
	<div class="modal fade bs-example-modal-sm modal-alert" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">

		<div class="modal-dialog modal-sm" style="width:80%">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&#215;</button>
					<h3>ที่อยู่ที่จัดส่ง</h3>
				</div>

				<div class="modal-body">
					<div class="row-fluid">
						<div class="span10 offset1">
							<div id="modalTab">
								<div class="tab-content">
									<div class="tab-pane active" id="about">


										<div class="form-group">
											<label for="name">ชื่อ:</label>
											<input type="text" class="form-control" name="name" placeholder="Enter name" required>
										</div>
										<div class="form-group">
											<label for="email">Email:</label>
											<input type="email" class="form-control" name="email" placeholder="Enter email" required>
										</div>
										<div class="form-group">
											<label for="phone">Phone:</label>
											<input type="text" class="form-control" name="phone" placeholder="Enter phone" required>
										</div>
										<div class="form-group">
											<label for="address">Address:</label>
											<textarea class="form-control" name="address" placeholder="Enter address" required></textarea>
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
