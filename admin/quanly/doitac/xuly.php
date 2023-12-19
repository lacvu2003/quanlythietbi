<?php
    include ('../../config/config.php');
    if(isset($_POST['btnThem'])){
        $mahd = $_POST['mahopdong'];
        $tendoitac = $_POST['tendoitac'];
        $sql_them = "INSERT INTO hopdong (DoiTac,MaHopDong) VALUES ('".$tendoitac."','".$mahd."')";
        $query_them = mysqli_query($connect,$sql_them);
        header('Location: ../../../index.php?quanly=doitac');
    }
    elseif(isset($_POST['btnSua'])){
        $mahd = $_POST['mahopdong'];
        $tendoitac = $_POST['tendoitac'];
        $sql_sua = "UPDATE hopdong SET DoiTac = '$tendoitac', MaHopDong = '$mahd' where DoiTac = '$_GET[dt]'";
        $query = mysqli_query($connect,$sql_sua);
        header('Location: ../../../index.php?quanly=doitac');
    }
    else{
        $id = $_GET['dt'];
        $sql_xoa = "DELETE from hopdong where DoiTac = '$id'";
        mysqli_query($connect,$sql_xoa);
        header('Location: ../../../index.php?quanly=doitac');
    }
?>