<link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css" />
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
<div class="them" style="padding-top: 50px; padding-bottom: 50px; padding-right: 25px;">
<?php
        if($_SESSION['dangnhap'] == 'user@vd.com'){
            echo "";
        }
        else{
            echo '<a href="index.php?quanly=them_update">Thêm phiếu sửa</a>';
        }
    ?>
</div>
<table id="lietkesua" class="lietkenhap" border="1" cellspacing = "0">
            <thead>
                <tr style="color: white; background-color: #11101D; border-bottom: none;">
                    <td>Serial</td>
                    <td>Mã phiếu nhận</td>
                    <td>Lỗi trước sửa chữa</td>
                    <td>Kết quả sữa</td>
                    <td>Nội dung sửa</td>
                    <td>Serial thay thế</td>
                    <td>Người sửa</td>
                    <td>Số ngày sửa</td>
                    <td>Ngày giao test</td>
                    <td>Người giao test</td>
                    <td>Người nhận test</td>
                    <td>Đơn giá</td>
                    <td>Bảo hành</td>
                    <td>Quản lý</td>
                </tr>
            </thead> 
            <tbody>   
                    <?php
                        // include ('admin/config/config.php');
                        $sql1 = "select * from phieusuachua";
                        $query1 = mysqli_query($connect,$sql1);
                        while($row1 = mysqli_fetch_array($query1)){
                    ?>
                    <tr>
                        <td><?php echo $row1['Serial_ID'] ?></td>
                        <td><?php echo $row1['PhieuID'] ?></td>
                        <td><?php echo $row1['LoiTruocSuaChua'] ?></td>
                        <td><?php echo $row1['KetQuaSua'] ?></td>
                        <td><?php echo $row1['NoiDungSua'] ?></td>
                        <td><?php echo $row1['SerialSwap'] ?></td>
                        <td><?php echo $row1['NguoiSua'] ?></td>
                        <td><?php echo $row1['Songaysua'] ?></td>
                        <td><?php echo $row1['NgayTest'] ?></td>
                        <td><?php echo $row1['NguoiGiaoTest'] ?></td>
                        <td><?php echo $row1['NguoiNhanTest'] ?></td>
                        <td style="width: 110px;"><?php echo number_format($row1['Dongia'],0,',','.'); ?> vnđ</td>
                        <td><?php echo $row1['Baohanh'] ?></td>
                        <td style="width: 120px;"><a href="index.php?quanly=sua_update&id=<?php echo $row1['Serial_ID'] ?>">Sửa | </a> 
                        <?php 
                            if($_SESSION['dangnhap'] == 'user@vd.com'){
                                echo "";
                            }
                            else{
                        ?>
                            <a href="admin/quanly/update/xuly.php?id=<?php echo $row1['Serial_ID'] ?>">Xóa</a>
                        <?php
                            }
                        ?>
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
    new DataTable('#lietkesua');
</script>