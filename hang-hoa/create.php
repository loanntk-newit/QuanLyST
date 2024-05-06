<?php
include("../config.php");
if (isset($_POST['create'])) {
    $MaHH = $_POST['MaHH'];
    $MaNhom = $_POST['MaNhom'];
    $DonViTinh = $_POST['DonViTinh'];
    $TrongLuong = $_POST['TrongLuong'];
    $HanSuDung = $_POST['HanSuDung'];
    $TenHangHoa = $_POST['TenHangHoa'];

    // query
    $sql = "INSERT INTO `HANGHOA`(`MaHH`, `MaNhom`, `DonViTinh`, `TrongLuong`, `HanSuDung`, `TenHangHoa`)
    VALUES ('$MaHH', '$MaNhom', '$DonViTinh', '$TrongLuong', '$HanSuDung', '$TenHangHoa')";
    try {
        $query = mysqli_query($db, $sql);
        if ($query)
            header('Location: ./index.php?status=success');
        else
            header('Location: ./index.php?status=fail');
    } catch (\Throwable $th) {
        header('Location: ./index.php?status=fail');
    }
} else
    die("Có lỗi xảy ra...");
