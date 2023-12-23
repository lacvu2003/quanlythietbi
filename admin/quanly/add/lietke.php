<link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css" />

<style>
    .sua{
        border: 1px solid #1d1b31;
        border-radius: 10px;
        padding: 8px 8px;
        background-color: #1d1b31;
        margin-right: 10px;
        color: white;
    }
    .xoa{
        border: 1px solid #1d1b31;
        border-radius: 10px;
        padding: 8px 8px;
        background-color: #1d1b31;
        margin-left: 10px;
        color: white;
    }
    .inphieu{
        border: 1px solid #1d1b31;
        border-radius: 10px;
        padding: 6px 6px;
        background-color: #1d1b31;
        color: white;
    }
    .themsua{
        border: 1px solid #1d1b31;
        border-radius: 10px;
        padding: 6px 6px;
        background-color: #1d1b31;
        color: white;
    }
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
<div class="them" style="padding-top: 50px; padding-bottom: 50px; padding-right: 25px;">
    <?php
        if($_SESSION['dangnhap'] == 'user@vd.com'){
            echo "";
        }
        else{
            echo '<a href="index.php?quanly=them">Thêm phiếu nhập</a>';
        }
    ?>
</div>
<table id="example" class="lietkenhap display" border="1" cellspacing = "0">
            <thead>
                <tr style="color: white; background-color: #11101D; border-bottom: none;">
                    <td style="width: 70px;">Mã phiếu nhận</td>
                    <td>Tên phiếu</td>
                    <td>Serial</td>
                    <td>Tên thiết bị</td>
                    <td>Hình ảnh</td>
                    <td>Mã hợp đồng</td>
                    <td>Người giao</td>
                    <td>Người nhận</td>
                    <td>Trạng thái </td>
                    <td>Tình trạng nhận</td>
                    <td style="width: 100px;">Ngày nhận</td>
                    <td>Quản lý</td>
                </tr>
            </thead>
            <tbody>
                    <?php
                        // include ('admin/config/config.php');
                        $sql1 = "select * from phieuthongtinchung";
                        $query1 = mysqli_query($connect,$sql1);
                        while($row1 = mysqli_fetch_array($query1)){
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
                            <td style="width: 150px;"><br><a class="sua" href="index.php?quanly=sua&id=<?php echo $row1['MaPN'] ?>">Sửa</a> 
                                <?php 
                                    if($_SESSION['dangnhap'] == 'user@vd.com'){
                                        echo "";
                                    }
                                    else{
                                ?>
                                    <a class="xoa" onclick="return confirm('Bạn có chắc chắn muốn xóa không ?');" href="admin/quanly/add/xuly.php?id=<?php echo $row1['MaPN'] ?>">Xóa</a>
                                <?php
                                    }
                                ?>
                                <br><br><hr><br><a class="inphieu" href="admin/quanly/add/indon.php?id=<?php echo $row1['MaPN'] ?>">In phiếu</a>
                                <br><br><a class="themsua" href="index.php?quanly=them_update&serial=<?php echo $row1['Serial'] ?>&mapn=<?php echo $row1['MaPN'] ?>">Thêm sửa</a>
                            </td>
                        </tr>
                    
                    <?php
                    }
                    ?>
                    </tbody>
</table>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
<script>
    new DataTable('#example');
</script>