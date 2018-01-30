<div class="row">

<?php
$i = 0;
$cart_session = @$this->session->userdata('cart_session');

foreach($row as $row){

?>
   <div class="col-sm-6 col-md-3">
      <div class="thumbnail">

			<img id="myImg" src="<?php echo base_url();?>assetAdmin/img/<?php if($row->Pro_Pic != ''){  echo $row->Pro_Pic; } else { echo 'no_image.png'; } ?>" alt="<?php echo $row->Pro_Name;?>" class="img-responsive" style="height:300px">


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
</div>

<script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById('myImg');
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");
img.onclick = function(){
    modal.style.display = "block";
    modalImg.src = this.src;
    captionText.innerHTML = this.alt;
}

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}
</script>
