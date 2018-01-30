<!--start footer-->
<footer>
  <div class="container">
    <div class="row">
      <div class="col-lg-4">
        <div class="widget">
          <h5 class="widgetheading">Nam libero tempore</h5>
          <p>soluta nobis est eligendi optio cumque nihil impedit quo minus id
          excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui

          </p>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="widget">
          <h5 class="widgetheading">Pages</h5>
          <ul class="link-list">
            <li><a href="#">Press release</a></li>
            <li><a href="#">Terms and conditions</a></li>
            <li><a href="#">Privacy policy</a></li>
            <li><a href="#">Career center</a></li>
            <li><a href="#">Contact us</a></li>
          </ul>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="widget">
          <h5 class="widgetheading">Latest posts</h5>
          <ul class="link-list">
            <li><a href="#">Lorem ipsum dolor sit amet</a></li>
            <li><a href="#">Pellentesque et pulvinar enim</a></li>
            <li><a href="#">Natus error sit voluptatem </a></li>
          </ul>
        </div>
      </div>

    </div>
  </div>

  <div class="sub-footer">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <ul class="social-network">
            <li><a href="#" data-placement="top" title="Facebook"><i class="fa fa-facebook fa-1x"></i></a></li>
            <li><a href="#" data-placement="top" title="Twitter"><i class="fa fa-twitter fa-1x"></i></a></li>
            <li><a href="#" data-placement="top" title="Linkedin"><i class="fa fa-linkedin fa-1x"></i></a></li>
            <li><a href="#" data-placement="top" title="Pinterest"><i class="fa fa-pinterest fa-1x"></i></a></li>
            <li><a href="#" data-placement="top" title="Google plus"><i class="fa fa-google-plus fa-1x"></i></a></li>
          </ul>
        </div>
        <div class="col-lg-12">
          <div class="copyright">
            <p>&copy;Resi Theme - All right reserved.</p>
                          <div class="credits">
                              <!--
                                  All the links in the footer should remain intact.
                                  You can delete the links only if you purchased the pro version.
                                  Licensing information: https://bootstrapmade.com/license/
                                  Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Resi
                              -->
                              <a href="https://bootstrapmade.com/free-one-page-bootstrap-themes-website-templates/">One Page Bootstrap Themes</a> by <a href="https://bootstrapmade.com/">BootstrapMade</a>
                          </div>
          </div>
        </div>

      </div>
    </div>
  </div>
</footer>
<!--end footer-->

  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="<?php echo base_url('asset/js/jquery-2.1.1.min.js') ?>"></script>

  <script src="<?php echo base_url('asset/js/jquery-1.11.2.min.js') ?>"></script>

  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="<?php echo base_url('asset/js/bootstrap.min.js') ?>"></script>
  

  <script src="<?php echo base_url('asset/js/responsive-slider.js') ?>"></script>


  <script>
  	function numberOnly(numb) {

          var numbInput = (numb.which) ? numb.which : event.keyCode

  			if (numbInput > 31 && (numbInput < 48 || numbInput > 57))
                    return false;

              return true;
      }


  	$(document).ready(function() {

  		$(".add_qty").click(function(){
  			var position = $(this).attr('position');
  			var qty = $("#qty\\["+position+"\\]").val();
  			qty++;
  			$("#qty\\["+position+"\\]").val(qty);

  		});

  		$(".less_qty").click(function(){
  			var position = $(this).attr('position');
  			var qty = $("#qty\\["+position+"\\]").val();
  			qty--;
  			if(qty >= 0){
  				$("#qty\\["+position+"\\]").val(qty);
  			}

  		});


  		$(".add_to_cart").click(function(){


  			var Pro_Id = $(this).attr('Pro_Id');
  			var qty = $('.qty'+Pro_Id).val();
  			var total_harga = $("#total").val();

  			if(qty == 0){
  				alert('Minumum quantity 1');
  				return false;
  			} else {

  				$("#notification_div").html('<div class="alert alert-info" role="alert">Please wait...</div>');
  				var dataString  = { Pro_Id  : Pro_Id , qty : qty };


  					$.ajax({

  						type: "POST",
  						url: "<?php echo base_url();?>index.php/fontEnd/Cart",
  						data: dataString,
  						dataType: "json",
  						cache		: false,
  						success: function(data){



  							$("#notification_div").html('<div class="alert alert-success" role="alert">Success add to cart...</div>');
  							$("#update_cart").html(data.update_cart);




  						} ,error: function(xhr, status, error) {
  							alert(status);
  						},
  					});

  			}

  		});

  		$(".update_cart").click(function(){


  			var total = $("#total").val();

  			if(!total){
  				alert('Cart empty');
  				return false;
  			}

  			if(total == 0){
  				alert('Cart empty');
  				return false;
  			}

  			var notif = false;
  			var qty = new Array();
  			var Pro_Id = new Array();
  			var Pro_Price = new Array();
  			var i = 0;
  			var new_total = 0;

  			$(".qty").each(function(){
  				if($(this).val() == 0){
  					notif = true;
  				}
  				qty.push($(this).val());
  			});

  			$(".Pro_Price").each(function(){
  				Pro_Price.push($(this).val());
  			});






  			if(notif == true){
  				alert('Minumum quantity 1');
  				return false;
  			} else {


  				$(".Pro_Id").each(function(){
  								Pro_Id.push($(this).val());
  								$('#span_total'+$(this).val()).html(Pro_Price[i]*qty[i]);
  								new_total += Pro_Price[i]*qty[i];
  								i++;
  							});

  							$('#span_all_total').html(new_total);
  							$('#total').val(new_total);


  				$("#notification_div").html('<div class="alert alert-info" role="alert">Please wait...</div>');

  				var dataString  = { Pro_Id  : Pro_Id , qty : qty };


  					$.ajax({

  						type: "POST",
  						url: "<?php echo base_url();?>index.php/fontEnd/Cart/update",
  						data: dataString,
  						dataType: "json",
  						cache: false,
  						success: function(data){


  							$("#notification_div").html('<div class="alert alert-success" role="alert">Success update cart...</div>');
  							$("#update_cart").html(data.update_cart);




  						} ,error: function(xhr, status, error) {
  							alert(status);
  						},
  					});



  			}

  		});

  		$("#submit").click(function(){
  			$('.modal-alert').modal('show');
  		});




  		$(".delete_cart").click(function(){


  			var x = confirm("Delete item ?");
  			var Pro_Id = $(this).attr('Pro_Id');
  			var total = $("#total").val();
  			var position = $(this).attr('position');

  			var Pro_Price = $("#Pro_Price\\["+position+"\\]").val();
  			var qty = $("#qty\\["+position+"\\]").val();

  			var price_delete = Pro_Price*qty;
  			var new_total = eval(total - price_delete);


  			if(x == true){


  				$("#notification_div").html('<div class="alert alert-info" role="alert">Please wait ...</div>');

  				var dataString  = { Pro_Id  : Pro_Id };
  				$.ajax({

  						type: "POST",
  						url: "<?php echo base_url();?>index.php/fontEnd/Cart/delete",
  						data: dataString,
  						dataType: "json",
  						cache		: false,
  						success: function(data){

  							$("#tr"+Pro_Id).remove();
  							$("#notification_div").html('<div class="alert alert-success" role="alert">Success delete item ...</div>');


  							$('#total').val(new_total);
  							$('#span_all_total').html(new_total);

  							if(new_total == 0){
  								$('#tr_total').remove();
  								$('#tb_checkout').append(' <td colspan="6" align="center">Cart empty</td>');
  								$('#button_bottom').hide();
  							}

  							$("#update_cart").html(data.update_cart);

  						} ,error: function(xhr, status, error) {
  							alert(status);
  						},
  					});



  			} else {
  				return false;
  			}

  		});


  		$(".empty_cart").click(function(){

  			var total = $("#total").val();

  			if(!total){
  				alert('Cart empty');
  				return false;
  			}

  			if(total == 0){
  				alert('Cart empty');
  				return false;
  			}

  			var x = confirm("Empty cart ?");

  			if(x == true){


  				$("#notification_div").html('<div class="alert alert-info" role="alert">Please wait ...</div>');

  				var dataString  = { send  : true };
  				$.ajax({

  						type: "POST",
  						url: "<?php echo base_url();?>index.php/fontEnd/Cart/empty_cart",
  						data: dataString,
  						dataType: "json",
  						cache		: false,
  						success: function(data){


  							$("#notification_div").html('<div class="alert alert-success" role="alert">Success empty cart ...</div>');
  							$('#tr_total').remove();
  							$('#tb_checkout').html(' <td colspan="6" align="center">Cart empty</td>');
  							$('#button_bottom').hide();
  							$("#update_cart").html(data.update_cart);

  						} ,error: function(xhr, status, error) {
  							alert(status);
  						},
  					});



  			} else {
  				return false;
  			}

  		});


  	});
  </script>



  <script src="<?php echo base_url('asset/js/wow.min.js') ?>"></script>

<script>wow = new WOW({}).init();</script>



</body>
</html>
