<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<table class="lietkenhap" border="1" cellspacing = "0">
            <tr>
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
<?php
                        // include ('admin/config/config.php');
                        $sql1 = "select * from phieusuachua where Serial_ID = '$_GET[id]'";
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
                        <td><?php echo number_format($row1['Dongia'],0,',','.') ?></td>
                        <td><?php echo $row1['Baohanh'] ?></td>
                        <td><a href="index.php?quanly=sua_update&id=<?php echo $row1['Serial_ID'] ?>">Sửa</a></td>
                    </tr>
                    <?php
                    }
                    ?>
                    </table>
</body>
</html>