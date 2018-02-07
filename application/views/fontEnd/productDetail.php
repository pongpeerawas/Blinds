
<body>

  <?php
  $i = 0;
  $cart_session = @$this->session->userdata('cart_session');



    ?>


    <?php
    if(isset($product)){
      foreach ($product as $row){
        ?>

        <div class="container">
          <div class="row">
            <div class="col-md-8">
              <div class="page-header">
                <div class="blog">
                  <h5><?php echo $row->Pro_Name ?></h5>  <!-- ชื่อสินค้า -->



                    <img style="height: 350px; width: 350px" src="<?php echo base_url() ?>assetAdmin/img/<?php echo $row->Pro_Pic ?>" >
                    <p></p> <!-- รายละเอียดสินค้า -->





                  </div>
                </div>

              </div>




              <div class="col-md-4">

                <div class="input-group" style="width:120px">
                  <span class="input-group-btn">
                    <button type="button" class="btn btn-danger btn-number less_qty" position="<?php echo $i;?>">
                      <span class="glyphicon glyphicon-minus"></span>
                    </button>
                  </span>

                  <input type="text" id="qty[<?php echo $i;?>]" class="form-control input-number qty<?php echo $row->Pro_Id;?>" style="text-align:right;width:45px" value="<?php echo @$cart_session[$row->Pro_Id];?>" onkeypress="return numberOnly(event)">

                  <span class="input-group-btn">
                    <button type="button" class="btn btn-success btn-number add_qty" position="<?php echo $i;?>">
                      <span class="glyphicon glyphicon-plus"></span>
                    </button>
                  </span>

                  <div class="col-md-1" style="float:right;margin-left:-70px">
                    <button class="btn btn-primary add_to_cart" type="button" Pro_Id="<?php echo $row->Pro_Id;?>"><i class="glyphicon glyphicon-shopping-cart">ใส่ตะกร้า</i></button>
                  </div>

                </div>

                  <?php
                }
            }
            ?>

                </div>
              </div>
            </div>
          </div>



          <hr>

          


          </body>
          </html>
