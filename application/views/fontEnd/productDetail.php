<head>
  <style>
  body {font-family: Arial, Helvetica, sans-serif;}

  #myImg {
    border-radius: 5px;
    cursor: pointer;
    transition: 0.3s;
  }

  #myImg:hover {opacity: 0.7;}

  /* The Modal (background) */
  .modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    padding-top: 100px; /* Location of the box */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.9); /* Black w/ opacity */
  }

  /* Modal Content (image) */
  .modal-content {
    margin: auto;
    display: block;
    width: 80%;
    max-width: 700px;
  }

  /* Caption of Modal Image */
  #caption {
    margin: auto;
    display: block;
    width: 80%;
    max-width: 700px;
    text-align: center;
    color: #ccc;
    padding: 10px 0;
    height: 150px;
  }

  /* Add Animation */
  .modal-content, #caption {
    -webkit-animation-name: zoom;
    -webkit-animation-duration: 0.6s;
    animation-name: zoom;
    animation-duration: 0.6s;
  }

  @-webkit-keyframes zoom {
    from {-webkit-transform:scale(0)}
    to {-webkit-transform:scale(1)}
  }

  @keyframes zoom {
    from {transform:scale(0)}
    to {transform:scale(1)}
  }

  /* The Close Button */
  .close {
    position: absolute;
    top: 15px;
    right: 35px;
    color: #f1f1f1;
    font-size: 40px;
    font-weight: bold;
    transition: 0.3s;
  }

  .close:hover,
  .close:focus {
    color: #bbb;
    text-decoration: none;
    cursor: pointer;
  }

  /* 100% Image Width on Smaller Screens */
  @media only screen and (max-width: 700px){
    .modal-content {
      width: 100%;
    }

  }
</style>
</head>

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
        <div class="content">
          <h2><span><?php echo $row->Pro_Name ?></span></h2>

        </div>
        <div class="row">
          <div class="col-md-8">

                <img src="<?php echo base_url() ?>assetAdmin/img/<?php echo $row->Pro_Pic ?>"  alt="<?php echo $row->Pro_Name ?>" width="448" height="377" id="myImg" style="height: 450px; width: 450px" >
                <p> <?php echo $row->Pro_Detail ?></p>


          </div>

          <div class="col-md-4 ">
            <form class="form-search">
            </form>
              <div class="media-body">

                <h3><?php echo $row->Pro_Name ?></h3>
                <hr>
                <b>  ประเภท : </b><?php echo $row->Cg_name?>
                <br>
                <b>   ขนาด : </b> <?php echo $row->Pro_Size ?> ซ.ม.



                <font color="#ff751a">  <h1><?php echo $row->Pro_Price;?> ฿</h1></font>

                <hr>

                <div class="ficon">
                  <!-- <div class="input-group" >
                    <span class="input-group-btn">
                      <button type="button" class="btn btn-primarys btn-number less_qty" position="<?php echo $i;?>">
                        <span class="glyphicon glyphicon-minus"></span>
                      </button>
                    </span>
                    <input type="text" id="qty[<?php echo $i;?>]" class="form-control input-number qty<?php echo $row->Pro_Id;?>" style="text-align:right;width:45px" value="<?php echo @$cart_session[$row->Pro_Id];?>" onkeypress="return numberOnly(event)" readonly>

                    <span class="input-group-btn">
                      <button type="button" class="btn btn-primarys btn-number add_qty" position="<?php echo $i;?>">
                        <span class="glyphicon glyphicon-plus"></span>
                      </button>
                    </span>
                  </div>
             -->


                </div>
                <a href="#"> <button class="btn btn-warning add_to_cart" type="button"  style="width:200px;height:40px "  Pro_Id="<?php echo $row->Pro_Id;?>"><i class="glyphicon glyphicon-shopping-cart"><b>ใส่ตะกร้า</b></i></button></a>

              </div>

            <?php
          }
        }
        ?>

      </div>
    </div>
  </div>


  <div id="myModal" class="modal">
    <span class="close">&times;</span>
    <img class="modal-content" id="img01">
    <div id="caption"></div>
  </div>




  <hr>
  <br>





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


</body>
</html>
