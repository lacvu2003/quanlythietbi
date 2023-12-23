<?php
    include("../../../tfpdf/tfpdf.php");
    include ('../../config/config.php');

    $pdf = new tFPDF();
    $pdf->AddPage("0");

    $pdf->AddFont('DejaVu','','DejaVuSansCondensed.ttf',true);
    $pdf->SetFont('DejaVu','',14);
    $pdf->SetFillColor(193,229,252);

    $id = $_GET['id'];
    $sql_in = "SELECT * FROM phieuthongtinchung WHERE MaPN = '".$id."'";
    $query_in = mysqli_query($connect,$sql_in);
    $row = mysqli_fetch_array($query_in);

    $pdf->Image('../../../image/logo-dark.png',35,0,50);
    $pdf->Cell(0,10,'',0,1,'L');
    $pdf->Cell(0,10,'',0,1,'L');
    $pdf->Cell(0,10,"Công Ty Cổ Phần Thương Mại Dịch Vụ Việt Đan",0,1,'L');
    $pdf->Cell(0,10,"PHIẾU NHẬN THIẾT BỊ",0,1,'C');
    $pdf->Cell(0,10,"Ngày: ".date("j/n/20y"),0,1,'C');

    $width_cell = array(35,45,40,50,40,30,40,40,40);
    
        $pdf->Cell($width_cell[0],10,'Mã phiếu nhận: ',0,0,'L');
        $pdf->Cell($width_cell[0],10,$row['MaPN'],0,1,'C');
        $pdf->Cell($width_cell[4],10,'Mã hợp đồng:',0,0,'L');
        $pdf->Cell($width_cell[4],10,$row['DoiTac'],0,1,'L');
        $pdf->Cell($width_cell[1],10,'Tên phiếu',1,0,'C');
        $pdf->Cell($width_cell[2],10,'Serial',1,0,'C');
        $pdf->Cell($width_cell[3],10,'Tên thiết bị',1,0,'C');
        $pdf->Cell($width_cell[5],10,'Người giao',1,0,'C');
        $pdf->Cell($width_cell[6],10,'Người nhận',1,0,'C');
        $pdf->Cell($width_cell[7],10,'Tình trạng',1,1,'C');
        $pdf->SetFillColor(235,236,236);
        $pdf->Cell($width_cell[1],10,$row['TenPhieu'],1,0,'C');
        $pdf->Cell($width_cell[2],10,$row['Serial'],1,0,'C');
        $pdf->Cell($width_cell[3],10,$row['TenThietBi'],1,0,'C');
        $pdf->Cell($width_cell[5],10,$row['NguoiGiao'],1,0,'C');
        $pdf->Cell($width_cell[6],10,$row['NguoiNhanHang'],1,0,'C');
        $pdf->Cell($width_cell[7],10,$row['TinhTrangTiepNhan'],1,1,'C');
    
    $pdf->Output();
?>