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
<?php
    $sql = "select * from phieusuachua where Serial_ID = '$_GET[id]'";
    $query = mysqli_query($connect,$sql);
    while($row = mysqli_fetch_array($query)){
?>
<!-- form thêm phiếu nhận -->
<div class="formbold-main-wrapper">
  <!-- Author: FormBold Team -->
  <!-- Learn More: https://formbold.com -->
  <div class="formbold-form-wrapper">
    <img src="image/logo-dark.png" class="formbold-img">
    <form action="admin/quanly/update/xuly.php?id=<?php echo $_GET['id'] ?>" method="POST">
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
            value="<?php echo $row['Serial_ID'] ?>"
          />
        </div>

        <div>
          <label for="mapn" class="formbold-form-label"> Mã phiếu nhận </label>
          <input
            type="text"
            name="mapn"
            id="mapn"
            placeholder="Mã phiếu nhận"
            class="formbold-form-input"
            autocomplete = "off"
            value="<?php echo $row['PhieuID'] ?>"
          />
        </div>
      </div>

      <div class="formbold-input-flex">
        <div>
            <label for="loitruockhisua" class="formbold-form-label"> Lỗi trước sửa chữa </label>
            <input
            type="text"
            name="loitruockhisua"
            id="loitruockhisua"
            placeholder="Lỗi trước sửa chữa"
            class="formbold-form-input"
            autocomplete = "off"
            value="<?php echo $row['LoiTruocSuaChua'] ?>"
            />
        </div>

        <div>
            <label for="ketquasua" class="formbold-form-label">Kết quả sửa</label>
            <input
            type="text"
            name="ketquasua"
            id="ketquasua"
            placeholder="Kết quả sửa"
            class="formbold-form-input"
            autocomplete = "off"
            value="<?php echo $row['KetQuaSua'] ?>"
            />
        </div>
      </div>

      <div class="formbold-mb-3 formbold-input-wrapp">
        <label for="noidungsua" class="formbold-form-label"> Nội dung sửa </label>
          <input
            type="text"
            name="noidungsua"
            id="noidungsua"
            placeholder="Nội dung sửa"
            class="formbold-form-input"
            autocomplete = "off"
            value="<?php echo $row['NoiDungSua'] ?>"
          />
      </div>

      <div class="formbold-mb-3 formbold-input-wrapp">
            <label for="swap" class="formbold-form-label"> Serial thay thế </label>
            <input
            type="text"
            name="swap"
            id="swap"
            placeholder="Serial thay thế"
            class="formbold-form-input"
            autocomplete = "off"
            value="<?php echo $row['SerialSwap'] ?>"
            />
      </div>

      <div class="formbold-input-flex">
        <div>
            <label for="songaysua" class="formbold-form-label"> Số ngày sửa </label>
            <input
            type="text"
            name="songaysua"
            id="songaysua"
            placeholder="Số ngày sửa"
            class="formbold-form-input"
            autocomplete = "off"
            value="<?php echo $row['Songaysua'] ?>"
            />
        </div>

        <div>
            <label for="nguoisua" class="formbold-form-label"> Người sửa </label>
            <input
            type="text"
            name="nguoisua"
            id="nguoisua"
            placeholder="Người sửa"
            class="formbold-form-input"
            autocomplete = "off"
            value="<?php echo $row['NguoiSua'] ?>"
            />
        </div>
      </div>
      
      <div class="formbold-input-flex">
        <div>
            <label for="nguoigiaotest" class="formbold-form-label"> Người giao test </label>
            <input
            type="text"
            name="nguoigiaotest"
            id="nguoigiaotest"
            placeholder="Người giao test"
            class="formbold-form-input"
            autocomplete = "off"
            value="<?php echo $row['NguoiGiaoTest'] ?>"
            />
        </div>

        <div>
            <label for="nguoitest" class="formbold-form-label"> Người nhận test </label>
            <input
            type="text"
            name="nguoitest"
            id="nguoitest"
            placeholder="Người nhận test"
            class="formbold-form-input"
            autocomplete = "off"
            value="<?php echo $row['NguoiNhanTest'] ?>"
            />
        </div>
      </div>

      <div class="formbold-input-flex">
        <div>
            <label for="dongia" class="formbold-form-label"> Đơn giá </label>
            <input
            type="text"
            name="dongia"
            id="dongia"
            placeholder="Đơn giá"
            class="formbold-form-input"
            autocomplete = "off"
            value="<?php echo $row['Dongia'] ?>"
            />
        </div>

        <div>
            <label for="baohanh" class="formbold-form-label"> Bảo hành </label>
            <input
            type="text"
            name="baohanh"
            id="baohanh"
            placeholder="Bảo hành"
            class="formbold-form-input"
            autocomplete = "off"
            value="<?php echo $row['Baohanh'] ?>"
            />
        </div>
      </div>

      <input type="submit" class="formbold-btn" name="btnSua" value="Sửa phiếu sửa">
    </form>
  </div>
</div>
<?php
    }
?>

    