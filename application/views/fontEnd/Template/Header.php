<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ม่านและมู่ลี่</title>

    <!-- Bootstrap -->
  <link href="<?php echo base_url('asset/css/bootstrap.min.css') ?>" rel="stylesheet" />
  <link href="<?php echo base_url('asset/css/bootstrap.css') ?>" rel="stylesheet" />

	<link href="<?php echo base_url('asset/css/responsive-slider.css') ?>" rel="stylesheet" />
	<link href="<?php echo base_url('asset/css/animate.css') ?>" rel="stylesheet" />
  <link href="<?php echo base_url('asset/css/font-awesome.min.css') ?>" rel="stylesheet" />
  <link href="<?php echo base_url('asset/css/style.css') ?>" rel="stylesheet" />
  <link href="<?php echo base_url('asset/css/datepicker.css') ?>" rel="stylesheet" />

  <link href="<?php echo base_url('asset/css/jquery.dataTables.min.css') ?>" rel="stylesheet" />
  <header>
  <div class="container">
    <div class="row">

      <nav class="navbar navbar-default " role="navigation">

        <div class="container-fluid">
          <div class="navbar-header">
            <div class="navbar-brand">
              <a href="<?php echo site_url('');?>"><h1>Curtain Shop</h1></a>
            </div>
          </div>

            <button class = "navbar-toggle" data-toggle = "collapse" data-target=".navHeaderCollapse">
            <span class = "icon-bar"></span>
            <span class = "icon-bar"></span>
            <span class = "icon-bar"></span>
          </button>
          <div class = "collapse navbar-collapse navHeaderCollapse">
          <div class="menu">
            <ul class="nav nav-tabs" role="tablist">
              <!-- <li role="presentation" class="active"><a href="<?php echo base_url();?>index.php/Home"> หน้าแรก</a></li> -->
              <li role="presentation" id="" ><a href="<?php echo base_url();?>index.php/fontEnd/Cart/getCart" ><i class="glyphicon glyphicon-shopping-cart" ></i> <span class="badge badge-info" id="update_cart"><?php if($cart_session){echo array_sum($cart_session);} else { echo '0'; } ?></span> </li></a>



              <li role="presentation"><a href="portfolio.html">วิธีการชำระเงิน</a></li>


              <li  role="presentation" >
                <?php if($this->session->userdata('username') ==	FALSE){ ?>
                <li role="presentation">
                  <a href="<?php echo site_url('fontEnd/Login');?>">สมัครสมาชิก/เข้าสู่ระบบ</li></a>
                <?php }else{ ?>
              <li role="presentation"><a href="<?php echo base_url()?>index.php/fontEnd/Customer/single_history?id=<?$this->session->userdata('id')?>">ข้อมูลการสั่งซื้อ</a></li>

              <li class ="dropdown">
                              <a href ="#" class = "dropdown-toggle" data-toggle="dropdown">คุณ : <?php echo $this->session->userdata('name') ?></a>
                                <ul class="dropdown-menu">
                                  <li><a href="<?php echo base_url()?>index.php/fontEnd/Customer/single?id=<?$this->session->userdata('id')?> ">ข้อมูลส่วนตัว</a></li>
                                  <li><a href= "<?php echo base_url();?>index.php/fontEnd/Login/logout">ออกจากระบบ</a></li>
                                </ul>
                              </li>

              <?php } ?></i></a>
              </li>
            </ul>
          </div>
        </div>

      </nav>

    </div>
  </div>




</header>

<!-- <form action="" method="post">
	<div class="modal fade bs-example-modal-sm modal-alert" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">

		<div class="modal-dialog modal-sm" style="width:80%">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&#215;</button>
					<h3>ตะกร้าสินค้า</h3>
				</div>

				<div class="modal-body">
					<div class="row-fluid">
						<div class="span10 offset1">
							<div id="modalTab">
								<div class="tab-content">
									<div class="tab-pane active" id="about">
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
															$row = $this->Product_model->product_id($cs);
															$total += $row->Pro_Price*$value;
															?>

															<tr id="tr<?php echo $cs;?>">
																<td><?php echo $row->Pro_Name;?></td>
																<td><img src="<?php echo base_url();?>assetAdmin/img/<?php echo ($row->Pro_Pic)?>" width="100px"></td>
																<td>$ <?php echo $row->Pro_Price;?></td>
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
																<td>$ <span id="span_total<?php echo $cs;?>"><?php echo $row->Pro_Price*$value;?></span></td>
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
															<td>$ <span id="span_all_total"><?php echo $total;?></span></td>
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
												<a href="<?php echo base_url();?>index.php/fontEnd/Checkout" ><input class="btn btn-success pull-right" type="submit" value="ดำเนินการต่อ"></a>
												<button class="btn btn-danger pull-right RbtnMargin empty_cart" type="button" >ล้างตะกร้า</button>
												<button class="btn btn-warning pull-right RbtnMargin update_cart" type="button" >อัพเดต</button>
											</span>
											<?php
										}
										?>
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
