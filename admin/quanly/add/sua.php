<!-- style css form -->
<style>
  @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap');
  * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
  }
  body {
    font-family: 'Inter', sans-serif;
  }
  .formbold-mb-3 {
    margin-bottom: 15px;
  }

  .formbold-main-wrapper {
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 48px;
  }

  .formbold-form-wrapper {
    margin: 0 auto;
    max-width: 570px;
    width: 100%;
    background: white;
    padding: 40px;
  }

  .formbold-img {
    display: block;
    margin: auto
  }

  .formbold-input-wrapp > div {
    display: flex;
    gap: 20px;
  }

  .formbold-input-flex {
    display: flex;
    gap: 20px;
    margin-bottom: 15px;
  }
  .formbold-input-flex > div {
    width: 50%;
  }
  .formbold-form-input {
    width: 100%;
    padding: 13px 22px;
    border-radius: 5px;
    border: 1px solid #dde3ec;
    background: #ffffff;
    font-weight: 500;
    font-size: 16px;
    color: #536387;
    outline: none;
    resize: none;
  }
  .formbold-form-input::placeholder,
  select.formbold-form-input,
  .formbold-form-input[type='date']::-webkit-datetime-edit-text,
  .formbold-form-input[type='date']::-webkit-datetime-edit-month-field,
  .formbold-form-input[type='date']::-webkit-datetime-edit-day-field,
  .formbold-form-input[type='date']::-webkit-datetime-edit-year-field {
    color: rgba(83, 99, 135, 0.5);
  }

  .formbold-form-input:focus {
    border-color: #6a64f1;
    box-shadow: 0px 3px 8px rgba(0, 0, 0, 0.05);
  }
  .formbold-form-label {
    color: #07074D;
    font-weight: 500;
    font-size: 14px;
    line-height: 24px;
    display: block;
    margin-bottom: 10px;
  }

  .formbold-form-file-flex {
    display: flex;
    align-items: center;
    gap: 20px;
  }
  .formbold-form-file-flex .formbold-form-label {
    margin-bottom: 0;
  }
  .formbold-form-file {
    font-size: 14px;
    line-height: 24px;
    color: #536387;
  }
  .formbold-form-file::-webkit-file-upload-button {
    display: none;
  }
  .formbold-form-file:before {
    content: 'Upload file';
    display: inline-block;
    background: #EEEEEE;
    border: 0.5px solid #FBFBFB;
    box-shadow: inset 0px 0px 2px rgba(0, 0, 0, 0.25);
    border-radius: 3px;
    padding: 3px 12px;
    outline: none;
    white-space: nowrap;
    -webkit-user-select: none;
    cursor: pointer;
    color: #637381;
    font-weight: 500;
    font-size: 12px;
    line-height: 16px;
    margin-right: 10px;
  }

  .formbold-btn {
    text-align: center;
    width: 100%;
    font-size: 16px;
    border-radius: 5px;
    padding: 14px 25px;
    border: none;
    font-weight: 500;
    background-color: #6a64f1;
    color: white;
    cursor: pointer;
    margin-top: 25px;
  }
  .formbold-btn:hover {
    box-shadow: 0px 3px 8px rgba(0, 0, 0, 0.05);
  }

  .formbold-w-45 {
    width: 45%;
  }
</style>
<!-- form sửa phiếu nhận -->
<?php
    $sql = "SELECT * from phieuthongtinchung where mapn = $_GET[id]";
    $query = mysqli_query($connect,$sql);
?>
<div class="formbold-main-wrapper">
  <!-- Author: FormBold Team -->
  <!-- Learn More: https://formbold.com -->
  <div class="formbold-form-wrapper">
    <img src="image/logo-dark.png" class="formbold-img">
    <form action="admin/quanly/add/xuly.php?id=<?php echo $_GET['id'] ?>" method="POST" enctype="multipart/form-data">
      <?php
        while($row = mysqli_fetch_array($query)){
      ?>
      <div class="formbold-input-flex">
        <div>
          <label for="mapn" class="formbold-form-label"> Mã phiếu nhận </label>
          <input
            type="text"
            name="mapn"
            id="mapn"
            placeholder="Mã phiếu nhận"
            class="formbold-form-input"
            autocomplete = "off"
            value="<?php echo $row['MaPN'] ?>"
          />
        </div>

        <div>
          <label for="tenphieu" class="formbold-form-label"> Tên phiếu </label>
          <input
            type="text"
            name="tenphieu"
            id="tenphieu"
            placeholder="Tên phiếu"
            class="formbold-form-input"
            autocomplete = "off"
            value="<?php echo $row['TenPhieu'] ?>"
          />
        </div>
      </div>

      <div class="formbold-input-flex">
        <div>
            <label for="serial" class="formbold-form-label"> Serial </label>
            <input
            type="text"
            name="serial"
            id="serial"
            placeholder="Serial"
            class="formbold-form-input"
            autocomplete = "off"
            value="<?php echo $row['Serial'] ?>"
            />
        </div>

        <div>
            <label for="sothutu" class="formbold-form-label">Số thứ tự</label>
            <input
            type="text"
            name="sothutu"
            id="sothutu"
            placeholder="Serial"
            class="formbold-form-input"
            autocomplete = "off"
            value="<?php echo $row['SoThuTu'] ?>"
            />
        </div>
      </div>

      <div class="formbold-mb-3 formbold-input-wrapp">
        <label for="tenthietbi" class="formbold-form-label"> Tên thiết bị </label>
          <input
            type="text"
            name="tenthietbi"
            id="tenthietbi"
            placeholder="Tên thiết bị"
            class="formbold-form-input"
            autocomplete = "off"
            value="<?php echo $row['TenThietBi'] ?>"
          />
      </div>

      <div class="formbold-mb-3 formbold-input-flex">
          <div>
            <label for="doitac" class="formbold-form-label"> Đối tác </label>
            <select name="doitac" id="">
                <option value="<?php echo $row['DoiTac'] ?>"><?php echo $row['DoiTac'] ?></option>
            </select>
          </div>
          <div>
            <label for="trangthai" class="formbold-form-label"> Trạng thái </label>
            <select name="trangthai" id="">
              <option value="Đang sửa chữa">Đang sửa chữa</option>
              <option value="Đã hoàn thành">Đã hoàn thành</option>
            </select>
          </div>
      </div>

      <div class="formbold-input-flex">
        <div>
            <label for="nguoigiao" class="formbold-form-label"> Người giao </label>
            <input
            type="text"
            name="nguoigiao"
            id="nguoigiao"
            placeholder="Người giao"
            class="formbold-form-input"
            autocomplete = "off"
            value="<?php echo $row['NguoiGiao'] ?>"
            />
        </div>

        <div>
            <label for="nguoinhan" class="formbold-form-label"> Người nhận </label>
            <input
            type="text"
            name="nguoinhan"
            id="nguoinhan"
            placeholder="Serial"
            class="formbold-form-input"
            autocomplete = "off"
            value="<?php echo $row['NguoiNhanHang'] ?>"
            />
        </div>
      </div>

      <div class="formbold-mb-3">
        <label for="tinhtrang" class="formbold-form-label">
          Tình trạng thiết bị
        </label>
        <input
            type="text"
            name="tinhtrang"
            id="tinhtrang"
            placeholder="Tình trang thiết bị"
            class="formbold-form-input"
            autocomplete = "off"
            value="<?php echo $row['TinhTrangTiepNhan'] ?>"
            />
      </div>

      <div class="formbold-form-file-flex">
        <label for="upload" class="formbold-form-label">
          Hình ảnh
        </label>
        <input
          type="file"
          name="hinhanh"
          id="hinhanh"
          class="formbold-form-file"
        />
      </div>

      <input type="submit" class="formbold-btn" name="btnSua" value="Sửa phiếu nhận">
    </form>
  </div>
</div>
<?php
    }
?>

    