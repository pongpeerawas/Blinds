<!-- <div class="row">
  <div class="breadcrumb">
    <h4>สินค้า</h4>
  </div>

  <?php
  $i = 0;
  $cart_session = @$this->session->userdata('cart_session');


  foreach($row as $row){

    ?>


    <div class="col-sm-8 col-md-4">
      <div class="boxs">
        <div class="wow bounceIn" data-wow-offset="0" data-wow-delay="1s">
          <div class="thumbnail">
            <a  data-quantity="1" data-product_sku="" data-product_id="70" rel="nofollow" href="<?php echo base_url()?>index.php/fontEnd/Product/single?id=<?php echo $row->Pro_Id ?>">
              <img id="myImg" src="<?php echo base_url();?>assetAdmin/img/<?php echo $row->Pro_Pic ?>" alt="<?php echo $row->Pro_Name;?>" class="img-responsive" style="height:300px">
            </div>
            <h3><?php echo $row->Pro_Name;?></h3>
            <h5><?php echo $row->Pro_Size;?></h5>
            <h2><?php echo $row->Pro_Price;?> ฿</h2>
          </a>
          <hr>
        </div>
      </div>
    </div>
    <?php
    $i++;
  }


  ?>

<? endforeach; ?>
</div> -->
