<?php
include("../config.php");

if (isset($_POST['edit_data'])) {
    // Lấy dữ liệu từ form
    $MaPX = $_POST['edit_MaPX'];
    $MaKH = $_POST['edit_MaKH'];
    $MaNV = $_POST['edit_MaNV'];
    $NgayXuat = $_POST['edit_NgayXuat'];
    $TongTienXuat = $_POST['edit_TongTienXuat'];

    // query
    $sql = "UPDATE `PHIEUXUAT` SET `MaKH`='$MaKH',`MaNV`='$MaNV',`NgayXuat`='$NgayXuat',`TongTienXuat`='$TongTienXuat' WHERE `MaPX` = '$MaPX'";

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
