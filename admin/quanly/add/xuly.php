<?php
    include ('../../config/config.php');
    if(isset($_POST['btnNhap'])){
        $maptn = $_POST['mapn'];
        $tenphieu = $_POST['tenphieu'];
        $serial = $_POST['serial'];
        $sothutu = $_POST['sothutu'];
        $tenthietbi = $_POST['tenthietbi'];
        $hinhanh = $_FILES['hinhanh']['name'];
        $hinhanh_tmp = $_FILES['hinhanh']['tmp_name'];
        $hinhanh_time = time().'_'.$hinhanh;
        $doitac = $_POST['doitac'];
        $nguoigiao = $_POST['nguoigiao'];
        $nguoinhan = $_POST['nguoinhan'];
        $trangthai = $_POST['trangthai'];
        $tinhtrang = $_POST['tinhtrang'];
        
        $sql = "INSERT INTO phieuthongtinchung (MaPN,TenPhieu,Serial,SoThuTu,TenThietBi,HinhAnh,DoiTac,NguoiGiao,NguoiNhanHang,TrangThaiPhieu,TinhTrangTiepNhan) 
        VALUES ('".$maptn."','".$tenphieu."','".$serial."','".$sothutu."','".$tenthietbi."','".$hinhanh_time."','".$doitac."','".$nguoigiao."','".$nguoinhan."','".$trangthai."','".$tinhtrang."')";
        $query = mysqli_query($connect,$sql);
        move_uploaded_file($hinhanh_tmp,'../uploads/'.$hinhanh_time);
        header('Location: ../../../index.php?quanly=lietkenhap');
    }
    elseif(isset($_POST['btnSua'])){
        $maptn = $_POST['mapn'];
        $tenphieu = $_POST['tenphieu'];
        $serial = $_POST['serial'];
        $sothutu = $_POST['sothutu'];
        $tenthietbi = $_POST['tenthietbi'];
        $hinhanh = $_FILES['hinhanh']['name'];
        $hinhanh_tmp = $_FILES['hinhanh']['tmp_name'];
        $hinhanh_time = time().'_'.$hinhanh;
        $doitac = $_POST['doitac'];
        $nguoigiao = $_POST['nguoigiao'];
        $nguoinhan = $_POST['nguoinhan'];
        $trangthai = $_POST['trangthai'];
        $tinhtrang = $_POST['tinhtrang'];
        if($hinhanh != ''){
            $sql_sua = "SELECT * from phieuthongtinchung where mapn = '$_GET[id]' LIMIT 1";
            $query_sua = mysqli_query($connect,$sql_sua);
            while($row = mysqli_fetch_array($query_sua)){
                unlink('../uploads/'.$row['HinhAnh']);
            }
            $sql_update = "UPDATE phieuthongtinchung set MaPN = '$maptn',TenPhieu = '$tenphieu',Serial = '$serial',SoThuTu = '$sothutu',TenThietBi = '$tenthietbi',HinhAnh = '$hinhanh_time',DoiTac = '$doitac',NguoiGiao = '$nguoigiao',NguoiNhanHang = '$nguoinhan',TrangThaiPhieu = '$trangthai',TinhTrangTiepNhan = '$tinhtrang' where MaPN = '$_GET[id]'";
            move_uploaded_file($hinhanh_tmp,'../uploads/'.$hinhanh_time);
        }
        else{
            $sql_update = "UPDATE phieuthongtinchung set MaPN = '$maptn',TenPhieu = '$tenphieu',Serial = '$serial',SoThuTu = '$sothutu',TenThietBi = '$tenthietbi',DoiTac = '$doitac',NguoiGiao = '$nguoigiao',NguoiNhanHang = '$nguoinhan',TrangThaiPhieu = '$trangthai',TinhTrangTiepNhan = '$tinhtrang' where MaPN = '$_GET[id]'";
        }
        mysqli_query($connect, $sql_update);
        header('Location: ../../../index.php?quanly=lietkenhap');
    }
    else{
        $id = $_GET['id'];
        $sql_xoa = "DELETE from phieuthongtinchung where MaPN = '$id'";
        mysqli_query($connect,$sql_xoa);
        header('Location: ../../../index.php?quanly=lietkenhap');
    }
?>