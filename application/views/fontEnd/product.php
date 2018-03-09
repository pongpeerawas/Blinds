<style>
table {
    border-collapse: collapse;
    width: 100%;
}

th, td {
    padding: 8px;
    /* text-align: left; */
    border-bottom: 1px solid #ddd;
}
</style>

 <div class="row">
  <div class="breadcrumb">
    <h4>สินค้า</h4>
  </div>
<br>
<br>



  <table id="example" class="responsive"  width="100%" border="0">

        <thead>
            <tr>
                <th width="57%"></th>
                <th width="43%"></th>

            </tr>
        </thead>

        <tbody>
          <?php
                 $i = 0;
                 $cart_session = @$this->session->userdata('cart_session');


                 foreach($row as $row){

                   ?>
            <tr>

                <td align="center">
                  <a  data-quantity="1" data-product_sku="" data-product_id="70" rel="nofollow" href="<?php echo base_url()?>index.php/fontEnd/Product/single?id=<?php echo $row->Pro_Id ?>">
                  <div class="wow bounceIn" data-wow-offset="0" data-wow-delay="1s"><img  src="<?php echo base_url();?>assetAdmin/img/<?php echo $row->Pro_Pic ?>" alt="<?php echo $row->Pro_Name;?>" class="img-responsive" style="width:350px"></div>
                  </a>
                  <br>
                </td>
                <td>
                  <div class="wow bounceIn" data-wow-offset="0" data-wow-delay="1.5s">
                      <h2><?php echo $row->Pro_Name;?></h2>
                      <hr>
                      <h5>ขนาด : <?php echo $row->Pro_Size;?></h5>
                      <h5>ประเภท : <?php echo $row->Cg_Name;?><h5>
                        <br>
                    <font color="#ff751a">  <h1><?php echo $row->Pro_Price;?> ฿</h1></font>
                    </div>

               </td>

            </tr>
            <!-- <tr>
              <td align="right">&nbsp;</td>
              <td>&nbsp;</td>
            </tr> -->

            <?php
            $i++;
          }
          ?>

          <? endforeach; ?>
          </tbody>


        </table>
