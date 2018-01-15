<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#">Form elements</a> <a href="#" class="current">Form wizard</a> </div>
    <h1>จัดการประเภทสินค้า</h1>
  </div>
  <div class="container-fluid"><hr>
    <div class="row-fluid">
      <div class="span8">
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
                    <input class="form-control" type="text" name="pname" id="pname" />
                    <input name=update value=เพิ่ม type=submit class="btn btn-success update" id=update  />

                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
        <div class="widget-content nopadding">
          <table class="table table-bordered table-striped">
            <tr>
              <th>รหัสประเภทสินค้า</th>
              <th>ชื่อประเภทสินค้า</th>
              <th>ลบ</th>
            </tr>
          
          </table>
        </div>

      </div>
    </div>
  </div>
</div>
