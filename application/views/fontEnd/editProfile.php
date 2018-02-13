
<body>


  <?php
if(isset($customer)){
    foreach ($customer as $row){
      ?>

      <div class="container">
        <div class="row">
          <div class="col-md-8">
            <div class="page-header">
              <div class="blog">

                <img id="myImg"  alt="<?php echo $row->Cus_Name ?>" style="height: 350px; width: 350px" src="<?php echo base_url() ?>assetAdmin/img/<?php echo $row->Cus_Name ?>" >
                <p> <?php echo $row->Cus_Name ?></p>

              </div>
            </div>

          </div>

          <div class="col-md-4 ">
            <form class="form-search">
              <input class="form-control" type="text" placeholder="Search..">
            </form>
            <div class="panel panel-default">
              <div class="panel-heading">
                <strong>รายละเอียดสินค้า</strong>
              </div>
              <h3><?php echo $row->Cus_Name ?></h3>  <!-- ชื่อสินค้า -->
              <div class="media-body">
                <h4 ><?php echo $row->Cus_Name?></h4>
                <h4 ><?php echo $row->Cus_Name ?></h4>
                <h4 >฿ <?php echo $row->Cus_Name ?></h4>

                <hr>

              </div>

            </div>
            <?php
          }}

        ?>

</div>
    </div>
  </div>




<hr>




</body>
</html>
