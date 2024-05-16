<!-- Modal Thêm Nhân viên -->
<div class="modal fade" id="themNhanVienModal" tabindex="-1" role="dialog" aria-labelledby="themNhanVienModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="themNhanVienModalLabel">THÊM NHÂN VIÊN</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <!-- Form thêm nhân viên -->
<form method="post"  class="row" enctype="multipart/form-data" >
    <div class="col-md-12">
        <div class="form-group row">
            <label for="hoten" class="col-md-3 col-form-label">Họ đệm:</label>
            <div class="col-md-9">
                <input type="text" name="hodem" id="hoten" class="form-control" required>
            </div>
        </div>
        <div class="form-group row">
            <label for="hoten" class="col-md-3 col-form-label">Tên:</label>
            <div class="col-md-9">
                <input type="text" name="ten" id="hoten" class="form-control" required>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-md-3 col-form-label">Giới Tính:</label>
            <div class="col-md-9">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="gt" id="nam" value="Nam" checked>
                    <label class="form-check-label" for="nam">Nam</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="gt" id="nu" value="Nữ">
                    <label class="form-check-label" for="nu">Nữ</label>
                </div>
            </div>
        </div>
        <div class="form-group row">
            <label for="ngaysinh" class="col-md-3 col-form-label">Ngày Sinh:</label>
            <div class="col-md-9">
                <input type="date" name="ngaysinh" id="ngaysinh" class="form-control" required >
            </div>
        </div>
        <div class="form-group row">
            <label class="col-md-3 col-form-label">Địa chỉ:</label>
            <div class="col-md-9">
                <input type="diachi" name="diachi" id="diachi" class="form-control"  required>
            </div>
        </div>
        <div class="form-group row">
            <label for="sdt" class="col-md-3 col-form-label">Số Điện Thoại:</label>
            <div class="col-md-9">
                <input type="text" name="sdt" id="sdt" class="form-control" required>
            </div>
        </div>
        <div class="form-group row">
            <label for="stk" class="col-md-3 col-form-label">Số Tài Khoản:</label>
            <div class="col-md-9">
                <input type="number" name="stk" id="stk" class="form-control"required >
            </div>
        </div>
        <div class="form-group row">
            <label for="email" class="col-md-3 col-form-label">Email:</label>
            <div class="col-md-9">
                <input type="email" name="email" id="email" class="form-control" required>
            </div>
        </div>
        <div class="form-group row">
            <label  class="col-md-3 col-form-label">Ngày bắt đầu:</label>
            <div class="col-md-9">
                <input type="date" name="NBD" id="NBD" class="form-control" required >
            </div>
        </div>
        <div class="form-group row">
            <label  class="col-md-3 col-form-label">Lương theo giờ: </label>
            <div class="col-md-9">
                <input type="number" name="HeSoLuong" class="form-control" required >
            </div>
        </div>
        <div class="form-group row">
            <label  class="col-md-3 col-form-label">BHXH:</label>
            <div class="col-md-9">
                <input type="text" name="BHXH" class="form-control" required >
            </div>
        </div>
        <div class="form-group row">
            <label for="img" class="col-md-3 col-form-label">Hình ảnh:</label>
            <div class="col-md-9">
                <input type="file" name="file" id="img" class="form-control-file" accept="image/*" required>
            </div>
        </div>
        
    </div>
    <div class="col-md-12 mt-3">
        <button type="submit" class="btn btn-primary" name="btn_themnv">Thêm</button>
    </div>
</form>
      </div>
    </div>
  </div>
</div>