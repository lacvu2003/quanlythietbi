<?php
    include ('../../config/config.php');
    if(isset($_POST['btnThemSua'])){
        $serial = $_POST['serial'];
        $mapn = $_POST['mapn'];
        $loitruockhisua = $_POST['loitruockhisua'];
        $ketquasua = $_POST['ketquasua'];
        $noidungsua = $_POST['noidungsua'];
        $swap = $_POST['swap'];
        $nguoisua = $_POST['nguoisua'];
        $songaysua = $_POST['songaysua'];
        $nguoigiaotest = $_POST['nguoigiaotest'];
        $nguoitest = $_POST['nguoitest'];
        $dongia = $_POST['dongia'];
        $baohanh = $_POST['baohanh'];
        
        $sql = "INSERT INTO phieusuachua (Serial_ID,PhieuID,LoiTruocSuaChua,KetQuaSua,NoiDungSua,SerialSwap,NguoiSua,Songaysua,NguoiGiaoTest,NguoiNhanTest,Dongia,Baohanh)
         VALUES ('".$serial."','".$mapn."','".$loitruockhisua."','".$ketquasua."','".$noidungsua."','".$swap."','".$nguoisua."','".$songaysua."','".$nguoigiaotest."','".$nguoitest."','".$dongia."','".$baohanh."')";
        $query = mysqli_query($connect,$sql);
        header('Location: ../../../index.php?quanly=lietkesua');
    }
    elseif(isset($_POST['btnSua'])){
        $serial = $_POST['serial'];
        $mapn = $_POST['mapn'];
        $loitruockhisua = $_POST['loitruockhisua'];
        $ketquasua = $_POST['ketquasua'];
        $noidungsua = $_POST['noidungsua'];
        $swap = $_POST['swap'];
        $nguoisua = $_POST['nguoisua'];
        $songaysua = $_POST['songaysua'];
        $nguoigiaotest = $_POST['nguoigiaotest'];
        $nguoitest = $_POST['nguoitest'];
        $dongia = $_POST['dongia'];
        $baohanh = $_POST['baohanh'];

         $sql_update = "UPDATE phieusuachua set Serial_ID = '$serial',PhieuID = '$mapn',LoiTruocSuaChua = '$loitruockhisua',KetQuaSua = '$ketquasua',NoiDungSua = '$noidungsua'
         ,SerialSwap = '$swap',NguoiSua = '$nguoisua',Songaysua = '$songaysua',NguoiGiaoTest = '$nguoigiaotest',NguoiNhanTest = '$nguoitest',Dongia = '$dongia',Baohanh = '$baohanh' where Serial_ID = '$_GET[id]'";
        mysqli_query($connect, $sql_update);
        header('Location: ../../../index.php?quanly=lietkesua');
    }
    else{
        $serial_id = $_GET['id'];
        $sql_xoa = "DELETE FROM phieusuachua WHERE Serial_ID = '$serial_id'";
        mysqli_query($connect,$sql_xoa);
        header('Location: ../../../index.php?quanly=lietkesua');
    }
?>