<?php
include("../config.php");
if (isset($_POST['create'])) {
    $MaPN = $_POST['MaPN'];
    $MaNCC = $_POST['MaNCC'];
    $MaNV = $_POST['MaNV'];
    $NgayNhap = $_POST['NgayNhap'];
    $TongTienNhap = $_POST['TongTienNhap'];

    // query
    $sql = "INSERT INTO `PHIEUNHAP`(`MaPN`, `MaNCC`, `MaNV`, `NgayNhap`, `TongTienNhap`)
    VALUES ('$MaPN', '$MaNCC', '$MaNV', '$NgayNhap', '$TongTienNhap')";
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
