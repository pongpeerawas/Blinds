<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#">Form elements</a> <a href="#" class="current">Form wizard</a> </div>
    <h1>จัดการประเภทสินค้า</h1>
  </div>
  <div class="container-fluid"><hr>
    <div class="row-fluid">
      <div class="span8">
        <?php echo form_open('backEnd/category/insert'); ?>

        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-pencil"></i> </span>
            <h5>เพิ่มประเภทสินค้า</h5>
          </div>
          <div class="widget-content nopadding">
            <form id="form-wizard" class="form-horizontal" method="post">
              <div id="form-wizard-1" class="step">
                <div class="control-group">
                  <label class="control-label">ชื่อประเภทสินค้า :</label>
                  <div class="controls">
                    <input class="form-control" type="text"  name="Cg_name" id="Cg_name"/>
                    <input  value=เพิ่ม type=submit class="btn btn-success update"  />

                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
          <?php echo form_close(); ?>

          
        <div class="widget-content nopadding">
          <table class="table table-bordered table-striped">
            <tr>
              <th>รหัสประเภทสินค้า</th>
              <th>ชื่อประเภทสินค้า</th>
              <th>ลบ</th>
            </tr>
            <?php foreach ($data as $key ): ?>

      													<tbody>
      															<tr>
      															<td><?php echo $key['Cg_Id']; ?></td>
      														  <td><?php echo $key['Cg_name'];?></td>
      															<td><a href="<?php echo site_url('backEnd/category/del/'.$key['Cg_Id'])?>" onclick="return confirm('ยืนยันการลบ !')"><button name="button" class="btn btn-danger">ลบ</button></a></td>
      														</tr>
      													</tbody>
      														<?php endforeach; ?>
          </table>
        </div>

      </div>
    </div>
  </div>
</div>
