<?php
    if(isset($_POST['timkiem'])){
        $tukhoa = $_POST['timkiem'];
      }
      else{
        $tukhoa = "";
      }
      $sql = "SELECT * FROM phieuthongtinchung,hopdong WHERE phieuthongtinchung.DoiTac = hopdong.DoiTac and MaPN LIKE '%".$_POST['timkiem']."%' OR  Serial LIKE '%".$_POST['timkiem']."%' OR  TenThietBi LIKE '%".$_POST['timkiem']."%' OR  MaHopDong LIKE '%".$_POST['timkiem']."%'";
      $query = mysqli_query($connect, $sql);
?>
<style>
    @media screen and (max-width: 768px){
    table{
      display: block;
      border: 1px solid black;
      overflow-x: auto;
      -webkit-scrollbar{
        height: 12px;
      }
      
    }
}
</style>
<table class="lietkenhap" border="1" cellspacing = "0">
            <tr>
                <td>Mã phiếu nhận</td>
                <td>Tên phiếu</td>
                <td>Serial</td>
                <td>Tên thiết bị</td>
                <td>Hình ảnh</td>
                <td>Đối tác</td>
                <td>Người giao</td>
                <td>Người nhận</td>
                <td>Trạng thái </td>
                <td>Tình trạng nhận</td>
                <td>Ngày nhận</td>
                <td>Quản lý</td>
            </tr>       
                    <?php
                        while($row1 = mysqli_fetch_array($query)){
                    ?>
                    <tr>
                        <td><?php echo $row1['MaPN'] ?></td>
                        <td><?php echo $row1['TenPhieu'] ?></td>
                        <td><a href="index.php?quanly=thongtinsua&id=<?php echo $row1['Serial'] ?>"><?php echo $row1['Serial'] ?></a></td>
                        <td><?php echo $row1['TenThietBi'] ?></td>
                        <td><img data-fancybox="gallery" src="admin/quanly/uploads/<?php echo $row1['HinhAnh'] ?> " alt="" width="50px" height="50px"></td>
                        <td><?php echo $row1['DoiTac'] ?></td>
                        <td><?php echo $row1['NguoiGiao'] ?></td>
                        <td><?php echo $row1['NguoiNhanHang'] ?></td>
                        <td><?php echo $row1['TrangThaiPhieu'] ?></td>
                        <td><?php echo $row1['TinhTrangTiepNhan'] ?></td>
                        <td><?php echo $row1['NgayTaoPhieu'] ?></td>
                        <td style="width: 100px;"><a href="index.php?quanly=sua&id=<?php echo $row1['MaPN'] ?>">Sửa</a><br><br><hr><br><a href="admin/quanly/add/indon.php?id=<?php echo $row1['MaPN'] ?>">In phiếu</a></td>
                        </tr>
                    <?php
                    }
                    ?>
</table>