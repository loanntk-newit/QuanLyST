<?php
include("../config.php");
if (isset($_POST['create'])) {
    $MaNV = $_POST['MaNV'];
    $TenNV = $_POST['TenNV'];
    $GioiTinh = $_POST['GioiTinh'];
    $NgaySinh = $_POST['NgaySinh'];
    $DiaChi = $_POST['DiaChi'];
    $SoDT = $_POST['SoDT'];

    // query
    $sql = "INSERT INTO `NHANVIEN`(`MaNV`, `TenNV`, `GioiTinh`, `NgaySinh`, `DiaChi`, `SoDT`)
    VALUES ('$MaNV', '$TenNV', '$GioiTinh', '$NgaySinh', '$DiaChi', '$SoDT')";
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
