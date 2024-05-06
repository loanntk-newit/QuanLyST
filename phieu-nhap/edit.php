<?php
include("../config.php");

if (isset($_POST['edit_data'])) {
    // Lấy dữ liệu từ form
    $MaPN = $_POST['edit_MaPN'];
    $MaNCC = $_POST['edit_MaNCC'];
    $MaNV = $_POST['edit_MaNV'];
    $NgayNhap = $_POST['edit_NgayNhap'];
    $TongTienNhap = $_POST['edit_TongTienNhap'];

    // query
    $sql = "UPDATE `PHIEUNHAP` SET `MaNCC`='$MaNCC',`MaNV`='$MaNV',`NgayNhap`='$NgayNhap',`TongTienNhap`='$TongTienNhap' WHERE `MaPN` = '$MaPN'";

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
