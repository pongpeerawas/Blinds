
 <div class="row">
  <div class="breadcrumb">
    <h4>สินค้า</h4>
  </div>
<br>
<br>




<table id="example" class="responsive"  width="100%" border="0">
 <thead>
            <tr>
                <th></th>
                <th></th>

            </tr>
        </thead>

        <tbody>  <?php
             $i = 0;
             $cart_session = @$this->session->userdata('cart_session');


             foreach($row as $row){

               ?>
            <tr>

                <td align="">
                  <a  data-quantity="1" data-product_sku="" data-product_id="70" rel="nofollow" href="<?php echo base_url()?>index.php/fontEnd/Product/single?id=<?php echo $row->Pro_Id ?>">

                  <div class="wow bounceIn" data-wow-offset="0" data-wow-delay="1s">


                        <img  src="<?php echo base_url();?>assetAdmin/img/<?php echo $row->Pro_Pic ?>" alt="<?php echo $row->Pro_Name;?>" class="img-responsive" style="height:350px">


                    </div>
                  </a>
                  <hr>
                </td>

                <td>
                  <a  data-quantity="1" data-product_sku="" data-product_id="70" rel="nofollow" href="<?php echo base_url()?>index.php/fontEnd/Product/single?id=<?php echo $row->Pro_Id ?>">
                  <div class="wow bounceIn" data-wow-offset="0" data-wow-delay="1.5s">
                      <h3><?php echo $row->Pro_Name;?></h3>
                      <h5><?php echo $row->Pro_Size;?></h5>
                      <h2><?php echo $row->Pro_Price;?> ฿</h2>
                    </div>
                 </a>
          

               </td>

            </tr>

            <?php
            $i++;
          }
          ?>

          <? endforeach; ?>
          </tbody>


        </table>
