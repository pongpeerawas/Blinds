<?php
$i = 0;
$cart_session = @$this->session->userdata('cart_session');
?>
<div class="breadcrumb">
	<h4>ที่จัดส่งสินค้า</h4>
</div>
	<?= form_open('fontEnd/Shipping/saveShipping') ?>
	<?= validation_errors() ?>
	<?= $this->session->flashdata('error') ?>

	<div class="container" align="center">
		<div class="row">
			<?php foreach ($shipping as $row): ?>


				<div class=" col-md-6 ">

					<div class="panel panel-default">
						<div class="panel-heading">
							<strong>ข้อมูลส่วนตัว</strong>
						</div>
						<table class="table table-hover" border="0">
								<input type="text" class="form-control" name="Order_Id" id="Order_Id" value="<?php echo $row->Order_Id ?>" required>

							<tr>
								<td align="right"><label>ชื่อ-สกุล :</label></td>
								<td align="left"><input type="text" class="form-control" name="Ship_Name" id="Ship_Name" value="<?php echo $row->Cus_Name ?>" required></td>
							</tr>
							<tr>
								<td align="right"><label>เบอร์โทรศัพท์ :</label></td>
								<td align="left">  <input type="text" class="form-control" name="Ship_Phone" id="Ship_Phone" value="<?php echo $row->Cus_Phone ?>" required|min_length[10]|></td>
							</tr>

							<tr>
								<td align="right"><label>ที่อยู่ :</label></td>
								<td align="left"><input type="text" class="form-control" name="Ship_District" id="Ship_District" value="<?php echo $row->Cus_District ?>" required></td>
							</tr>
							<tr>
								<td align="right">	<label for="Cus_Province">จังหวัด :</label></td>
								<td align="left"><div class="form-group">
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
								</div></td>
							</tr>
							<tr>
								<td align="center" colspan="3"><span id="button_bottom">
									<a href="<?php echo base_url();?>index.php/fontEnd/Shipping" ><input class="btn btn-success pull-right" type="submit" value="ดำเนินการต่อ"></a>

								</span></td>

							</tr>

						</table>
					</div>
				</div>
			</div>
		</div>


	<?php endforeach;?>


			<?php echo form_close(); ?>
