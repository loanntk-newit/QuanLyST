<?php
include("../config.php");

if (isset($_POST['edit_data'])) {
    // Lấy dữ liệu từ form
    $MaNV = $_POST['edit_MaNV'];
    $TenNV = $_POST['edit_TenNV'];
    $GioiTinh = $_POST['edit_GioiTinh'];
    $NgaySinh = $_POST['edit_NgaySinh'];
    $DiaChi = $_POST['edit_DiaChi'];
    $SoDT = $_POST['edit_SoDT'];

    // query
    $sql = "UPDATE `NHANVIEN` SET `TenNV`='$TenNV',`GioiTinh`='$GioiTinh',`NgaySinh`='$NgaySinh',`DiaChi`='$DiaChi',`SoDT`='$SoDT' WHERE `MaNV` = '$MaNV'";
    
    try {
        $query = mysqli_query($db, $sql);
        if ($query)
            header('Location: ./index.php?update=success');
        else
            header('Location: ./index.php?update=fail');
    } catch (\Throwable $th) {
        header('Location: ./index.php?update=fail1');
    }
} else
    die("Có lỗi xảy ra...");
