<?php
    if(isset($_GET['quanly'])&&$_GET['quanly']){
        $quanly = $_GET['quanly'];
        switch($quanly){
            case 'them';
                include("quanly/add/them.php");
                break;
            case 'lietkenhap';
                include("quanly/add/lietke.php");
                break;
            case 'sua';
                include("quanly/add/sua.php");
                break;
            case 'thongtinsua';
                include("quanly/add/thongtinsua.php");
                break;
            case 'them_update';
                include("quanly/update/them.php");
                break;
            case 'lietkesua';
                include("quanly/update/lietkesua.php");
                break;
            case 'sua_update';
                include("quanly/update/sua.php");
                break;
            case 'doitac';
                include("quanly/doitac/lietke.php");
                break;
            case 'them_doitac';
                include("quanly/doitac/them.php");
                break;
            case 'sua_doitac';
                include("quanly/doitac/sua.php");
                break;
            case 'tim';
                include("timkiem.php");
                break;
        }
    }
    else{
        include("dashboard.php");
    }
?>