
        <div class="container">

            <div class="starter-template">
                <h1>PayPal Payment</h1>
                <p class="lead">Pay Now</p>
            </div>

            <div class="contact-form">

                <p class="notice error"><?= $this->session->flashdata('error_msg') ?></p><br/>
                <p class="notice error"><?= $this->session->flashdata('success_msg') ?></p><br/>
                <?php foreach ($pay as $row):

                  $vat = (($row->Order_sumPrice*7)/107);

                  ?>
                <form method="post" class="form-horizontal" role="form" action="<?= base_url() ?>index.php/paypal/create_payment_with_paypal">




                    <fieldset>
                         <input name="Order_Id" value="<?php echo $row->Order_Id ?>"> 
                        <input title="item_name" name="item_name" type="" value="<?php echo $row->Order_Id ?>">
                        <input title="item_number" name="item_number" type="hidden" value="-">
                        <input title="item_description" name="item_description" type="hidden" value="-">
                        <input title="item_tax" name="item_tax" type="hidden" value="1">
                        <!-- <input title="item_price" name="item_price" type="" value="7"> -->
                        <input title="item_price" name="item_price" type="" value="<?php echo $row->Order_sumPrice?>">
                        <input title="details_tax" name="details_tax" type="" value="0">
                        <!-- <input title="details_subtotal" name="details_subtotal" type="" value="<?php echo $row->Order_sumPrice ?>"> -->
                        <input title="details_subtotal" name="details_subtotal" type="" value="<?php echo $row->Order_sumPrice ?>">



                        <div class="form-group">
                            <div class="col-sm-offset-5">
                                <button  type="submit"  class="btn btn-success">Pay Now</button>
                            </div>
                        </div>
                    </fieldset>
                  <?php endforeach; ?>

                </form>
            </div>
        </div><!-- /.container -->
