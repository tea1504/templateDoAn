<?php
    include_once(__DIR__.'/../test-Database/dbconnect.php');
    $sqlSoLuongKhachHang = "SELECT COUNT(*) AS SoLuong FROM khachhang";
    $result = mysqli_query($conn,$sqlSoLuongKhachHang);
    $dataSoLuongKhachHang = [];
    while($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
        $dataSoLuongKhachHang=array(
            'SoLuong' => $row['SoLuong']
        );
    }
    echo json_encode($dataSoLuongKhachHang);
?>