
<div class="breadcrumb ">
	<li><a href="<?php echo site_url('');?>">หน้าแรก</a></li>
	<li class="active">ตะกร้าสินค้า</li>
</div>
										<br>
										<div class="table-responsive">
											<table id="mytable" class="table ">
												<thead>
													<th>สินค้า</th>
													<th></th>
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
														 $vat =0;
														foreach($cart_session as $cs=>$value){
															$row = $this->Product_model->product_id($cs);
															$total += $row->Pro_Price*$value;
															$vat = (($total*7)/107)+$total;
															// $total1
															?>

															<tr id="tr<?php echo $cs;?>">
																<td><?php echo $row->Pro_Name;?></td>
																<td><img  src="<?php echo base_url();?>assetAdmin/img/<?php echo ($row->Pro_Pic)?>"  width="300px"></td>
																<td>฿ <?php echo $row->Pro_Price;?></td>
																<td>



																	<div class="input-group" style="width:120px">
																		<span class="input-group-btn">
																			<button type="button" class="btn btn-primarys btn-number less_qty" position="<?php echo $i;?>">
																				<span class="glyphicon glyphicon-minus"></span>
																			</button>
																		</span>

																		<input type="text" class="form-control qty" value="<?php echo $value;?>" style="text-align:right" onkeypress="return numbOnly(event)" id="qty[<?php echo $i;?>]">


																		<span class="input-group-btn">
																			<button type="button" class="btn btn-primarys btn-number add_qty" position="<?php echo $i;?>">
																				<span class="glyphicon glyphicon-plus"></span>
																			</button>
																		</span>
																	</div>



																	<input type="hidden" class="Pro_Id"  id="Pro_Id[<?php echo $i;?>]" value="<?php echo $cs;?>">
																	<input type="hidden" class="Pro_Price"  id="Pro_Price[<?php echo $i;?>]" value="<?php echo $row->Pro_Price;?>">


																</td>
																<td>฿ <span id="span_total<?php echo $cs;?>"><?php echo $row->Pro_Price*$value;?></span></td>
																<td>
																	<a class="delete_cart " title="Delete" style="cursor:pointer" Pro_Id="<?php echo $cs;?>" position="<?php echo $i;?>"><span class="glyphicon glyphicon-trash"></span></a>
																</td>
															</tr>

															<?php
															$i++;
														}?>
														<input type="hidden" id="total" value="<?php echo $total;?>">
														<tr id="tr_total">
															<td colspan="4" align="right">มูลค่าสินค้า: &nbsp;</td>
															<td>฿ <span id="span_all_total"><?php echo $total;?></span></td>
															<!-- <td>฿ <span id="span_all_total"><?php echo $vat;?></span></td> -->

															<td>&nbsp;</td>
														</tr>
														<?php

													} else {

														?>

														<tr>
															<td colspan="6" align="center">ไม่มีสินค้าในตระกร้า</td>
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
												<a href="<?php echo base_url();?>index.php/fontEnd/Order" ><input class="btn btn-success pull-right" type="submit" value="ดำเนินการต่อ"></a>
												<button class="btn btn-danger pull-right RbtnMargin empty_cart" type="button" >ล้างตะกร้า</button>
												<button class="btn btn-warning pull-right RbtnMargin update_cart" type="button" >อัพเดต</button>
											</span>
											<?php
										}
										?>




<!--
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
</form> -->
