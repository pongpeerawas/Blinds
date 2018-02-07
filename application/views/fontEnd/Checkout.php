
<br>
<div class="table-responsive">
	<table id="mytable" class="table table-bordred table-striped">
		<thead>
			<th>สินค้า</th>
			<th>รูปสินค้า</th>
			<th>ราคา</th>
			<th>จำนวน</th>
			<th>ราคารวม</th>
			<th>ลบ</th>
		</thead>

		<tbody id="tb_checkout">

			<?php

			if($cart_session){
				$i = 0;
				$total =0;
				foreach($cart_session as $cs=>$value){
					$row = $this->Product_model->product_detail($cs);
					$total += $row->Pro_Price*$value;
					?>

					<tr id="tr<?php echo $cs;?>">
						<td><?php echo $row->Pro_Name;?></td>
						<td><img src="<?php echo base_url();?>assetAdmin/img/<?php if($row->Pro_Pic){echo $row->Pro_Pic;} else {echo 'no_image.png';}?>" width="100" ></td>
						<td> <?php echo $row->Pro_Price;?> บาท</td>
						<td>
							<div class="input-group" style="width:70px" id="#fh5co-hero">
								<span class="input-group-btn">
									<button type="button" class="btn btn-primary  less_qty"  size="1" position="<?php echo $i;?>">
										<span class="glyphicon glyphicon-minus"></span>
									</button>
								</span>

								<input type="text" size="1"  class=" qty" value="<?php echo $value;?>" style="text-align:center" onkeypress="return numbOnly(event)" id="qty[<?php echo $i;?>]">

								<span class="input-group-btn">
									<!-- <button type="button" class="btn btn-primary  add_qty" position="<?php echo $i;?>"> -->
										<a class="btn btn-primary add_qty " size="1" position="<?php echo $i;?>">
										<span class="glyphicon glyphicon-plus"></span>
										</a>
									</button>
								</span>
							</div>



							<input type="hidden" class="Pro_Id"  id="Pro_Id[<?php echo $i;?>]" value="<?php echo $cs;?>">
							<input type="hidden" class="Pro_Price"  id="Pro_Price[<?php echo $i;?>]" value="<?php echo $row->Pro_Price;?>">


						</td>
						<td> <span id="span_total<?php echo $cs;?>"><?php echo $row->Pro_Price*$value;?> บาท</span></td>
						<td>
							<a class="delete_cart btn btn-danger btn-xs" title="Delete" style="cursor:pointer" Pro_Id="<?php echo $cs;?>" position="<?php echo $i;?>">ลบ</a>
						</td>
					</tr>

					<?php
					$i++;
				}?>
				<input type="hidden" id="total" value="<?php echo $total;?>">
				<tr id="tr_total">
					<td colspan="4" align="right">ราคาสุทธิ &nbsp;</td>
					<td> <span id="span_all_total"><?php echo $total;?>  บาท</span></td>
					<td>&nbsp;</td>
				</tr>
				<?php

			} else {

				?>

				<tr>
					<td colspan="6" align="center">ไม่มีสินค้าในตะกร้า</td>
				</tr>

				<?php
			}
			?>

		</tbody>

	</table>

</div>
<?php
if($cart_session){
	?>
	<span id="button_bottom">
		<button class="btn btn-success pull-right" type="submit" id="submit">ดำเนินการต่อ</button>
		<button class="btn btn-danger pull-right RbtnMargin empty_cart" type="button" >ล้างตะกร้า</button>
		<button class="btn btn-warning pull-right RbtnMargin update_cart" type="button" >อัพเดต</button>
	</span>
	<?php
}
?>


<form action="" method="post">
	<div class="modal fade bs-example-modal-sm modal-alert" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">

		<div class="modal-dialog modal-sm" style="width:90%">
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
