<?php
include("../config.php");

if (isset($_POST['edit_data'])) {
    // Lấy dữ liệu từ form
    $MaHH = $_POST['edit_MaHH'];
    $MaNhom = $_POST['edit_MaNhom'];
    $DonViTinh = $_POST['edit_DonViTinh'];
    $TrongLuong = $_POST['edit_TrongLuong'];
    $HanSuDung = $_POST['edit_HanSuDung'];
    $TenHangHoa = $_POST['edit_TenHangHoa'];

    // query
    $sql = "UPDATE `HANGHOA` SET `MaNhom`='$MaNhom',`DonViTinh`='$DonViTinh',`TrongLuong`='$TrongLuong',`HanSuDung`='$HanSuDung',`TenHangHoa`='$TenHangHoa' WHERE `MaHH` = '$MaHH'";
    
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
