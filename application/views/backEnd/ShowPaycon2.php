


<!DOCTYPE html>
<html lang="en">
<head>
  <title>หลังร้าน</title>

  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="<?php echo base_url('assetAdmin/css/bootstrap.min.css') ?>" rel="stylesheet" />
  <link href="<?php echo base_url('assetAdmin/css/bootstrap-responsive.min.css') ?>" rel="stylesheet" />
  <link href="<?php echo base_url('assetAdmin/css/uniform.css') ?>" rel="stylesheet" />
  <link href="<?php echo base_url('assetAdmin/css/select2.css') ?>" rel="stylesheet" />
  <link href="<?php echo base_url('assetAdmin/css/matrix-style.css') ?>" rel="stylesheet" />
  <link href="<?php echo base_url('assetAdmin/css/matrix-media.css') ?>" rel="stylesheet" />
  <link href="<?php echo base_url('assetAdmin/font-awesome/css/font-awesome.css') ?>" rel="stylesheet" />
  <!-- <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'> -->

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
    width: 100%;
    max-width: 480px;
  }

  /* Caption of Modal Image */
  #caption {
    margin: auto;
    display: block;
    width: 100%;
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
  @media only screen and (max-width: 100%){
    .modal-content {
      width: 100%;
    }

  }
  </style>
</head>

<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#">Form elements</a> <a href="#" class="current">Form wizard</a> </div>
<?php if ($ShowPaycon == True): ?>

  <div class="widget-content">

    <div class="alert alert-success alert-block"> <a class="close" data-dismiss="alert" href="#">×</a>
      <h2 class="alert-heading">แจ้งชำระสินค้าเรียบร้อยแล้ว!</h2>
  </div>

  </div>
  </div>
  <div class="container-fluid">
    <div class="panel-heading">
      &nbsp;<h3 style="text-align: left">รายละเอียดการแจ้งชำระสินค้า</h3>
      <?php foreach ($ShowPaycon as $row): ?>

      <img id="myImg2" src="<?php echo base_url() ?>asset/img/<?php echo $row->Pc_Pic ?>" style=" height: 400px;">

    <?php endforeach;?>
    <hr>

      <table class="table table-responsive"  border="0">
        <thead>
          <tr>
            <th style="text-align: center">เลขที่ใบสั่งซื้อ</th>

            <!-- <th style="text-align: center">รูปภาพหลักฐานการโอนเงิน</th> -->
            <th style="text-align: center">บัญชี</th>

            <th style="text-align: center">ราคา</th>
            <th style="text-align: center">วันที่แจ้งชำระ</th>
            <th style="text-align: center">ชื่อผู้แจ้ง</th>
            <th style="text-align: center">หมายเหตุ</th>


          </tr>
        </thead>
        <tbody>
          <?php foreach ($ShowPaycon as $row): ?>

            <tr>
              <td><?php echo $row->Order_Id;?></td>

              <!-- <td  style="text-align: center"><img id="myImg2" src="<?php echo base_url() ?>asset/img/<?php echo $row->Pc_Pic ?>" style=" height: 170px;"></td> -->
              <td style="text-align: center"><?php echo $row->Pc_Bank;?></td>
              <td style="text-align: center"><?php echo $row->Pc_Price;?> </td>
              <td style="text-align: center"><?php echo $row->Pc_date;?> </td>
              <td style="text-align: center"><?php echo $row->Name;?> </td>
              <td ><?php echo $row->Pc_Detail;?> </td>


            </tr>
          <?php endforeach;?>


        </tbody>
      </table>


      <div id="myModal2" class="modal">
        <span class="close">&times;</span>
        <img class="modal-content" id="img02">
        <div id="caption"></div>
      </div>
      <button class="btn btn-danger" onclick="window.history.back()"> < กลับ</button>





    </div>
  </div>
  <?php else: ?>

    <div class="widget-content">

      <div class="alert alert-error alert-block"> <a class="close" data-dismiss="alert" href="#">×</a>
        <h2 class="alert-heading">ยังไม่มีการแจ้งชำระ!</h2>
    </div>
    <button class="btn btn-danger" onclick="window.history.back()"> < กลับ</button>

    </div>


<?php endif; ?>

</div>




<script src="<?php echo base_url('assetAdmin/js/jquery.min.js') ?>"></script>
<script src="<?php echo base_url('assetAdmin/js/jquery.ui.custom.js') ?>"></script>
<script src="<?php echo base_url('assetAdmin/js/bootstrap.min.js') ?>"></script>
<script src="<?php echo base_url('assetAdmin/js/jquery.uniform.js') ?>"></script>
<script src="<?php echo base_url('assetAdmin/js/select2.min.js') ?>"></script>
<script src="<?php echo base_url('assetAdmin/js/jquery.dataTables.min.js') ?>"></script>
<script src="<?php echo base_url('assetAdmin/js/matrix.js') ?>"></script>
<script src="<?php echo base_url('assetAdmin/js/matrix.tables.js') ?>"></script>


<script>
// Get the modal
var modal = document.getElementById('myModal2');

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById('myImg2');
var modalImg = document.getElementById("img02");
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
