<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#">Form elements</a> <a href="#" class="current">Form wizard</a> </div>
    <h1>จัดการข้อมูลสินค้า</h1>
  </div>
  <div class="container-fluid">
    <hr>




    <a href="<?php echo site_url('backEnd/product/insertform'); ?>"><button name="button" class="btn btn-info" style="text-align:center">เพิ่ม</button></a>


<div class="widget-box">
  <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
    <h5>รายการสินค้า</h5>
  </div>
  <div class="widget-content nopadding">
    <table class="table table-bordered data-table">
      <thead>
        <tr>
          <th>รหัส</th>
          <th>ชื่อสินค้า</th>
         <th>รายละเอียดสินค้า</th>
          <th>ประเภทสินค้า</th>
          <th>จำนวนสินค้า</th>
          <th>ราคา</th>
          <th>รูป</th>
          <th>ขนาด</th>
          <th>จัดการ</th>

        </tr>
      </thead>
      <?php foreach ($data as $key ): ?>

													<tbody>
															<tr>
															<td><?php echo $key['Pro_Id']; ?></td>
															<td><?php echo $key['Pro_Name'];?></td>
															<td><?php echo $key['Pro_Detail'];?></td>
                              <td><?php echo $key['Cg_name'];?></td>
															<td><?php echo $key['Pro_Amount'];?></td>
                              <td><?php echo $key['Pro_Price'];?></td>
                              <td><img src="<?php echo base_url('assetAdmin/img/'.$key['Pro_Pic']); ?>" style="width:150px;"></td>
                              <td><?php echo $key['Pro_Size'];?></td>
															<td><a href="<?php echo site_url('backEnd/product/updateform/'.$key['Pro_Id'])?>"><button name="button" class="btn btn-warning">แก้ไข</button></a>
															<a href="<?php echo site_url('backEnd/product/del/'.$key['Pro_Id'])?>" onclick="return confirm('ยืนยันการลบ !')"><button name="button" class="btn btn-danger">ลบ</button></a></td>
														</tr>
													</tbody>
														<?php endforeach; ?>
    </table>
  </div>
</div>
</div>

<!-- <?php
$sql2 = "select * from product ";
$query2 = mysqli_query($conn, $sql2);
$total_record = mysqli_num_rows($query2);
$total_page = ceil($total_record / $perpage);
?> -->
<div align="center">



 <a href="productadd.php?page=1" aria-label="Previous">
 <span aria-hidden="true">&laquo;</span>
 </a>

 <!-- <?php for($i=1;$i<=$total_page;$i++){ ?>
 <li><a href="productadd.php?page=<?php echo $i; ?>"><?php echo $i; ?></a></li>
 <?php } ?> -->

 <!-- <a href="productadd.php?page=<?php echo $total_page;?>" aria-label="Next"> -->
 <span aria-hidden="true">&raquo;</span>
 </a>


 </div></div>
