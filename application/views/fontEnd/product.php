<div class="row">

  <?php
  $i = 0;
  $cart_session = @$this->session->userdata('cart_session');


  foreach($row as $row){

    ?>

    <div class="col-sm-8 col-md-4">
      <div class="thumbnail">
        <a  data-quantity="1" data-product_sku="" data-product_id="70" rel="nofollow" href="<?php echo base_url()?>index.php/fontEnd/Product/single?id=<?php echo $row->Pro_Id ?>">
          <img id="myImg" src="<?php echo base_url();?>assetAdmin/img/<?php if($row->Pro_Pic != ''){  echo $row->Pro_Pic; } else { echo 'no_image.png'; } ?>" alt="<?php echo $row->Pro_Name;?>" class="img-responsive" style="height:300px">
          </a>

        </div>

        <h3><?php echo $row->Pro_Name;?></h3>
        <h4><?php echo $row->Pro_Size;?></h4>
        <h2><?php echo $row->Pro_Price;?> ฿</h2>
        <p>


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

          <div id="myModal" class="modal">
            <span class="close">&times;</span>
            <img class="modal-content" id="img01">
            <div id="caption"></div>
          </div>

        </p>

      </div>
      <?php
      $i++;
    }
    ?>

  <? endforeach; ?>


  </div>
