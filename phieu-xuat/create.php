<?php
include("../config.php");
if (isset($_POST['create'])) {
    $MaPX = $_POST['MaPX'];
    $MaKH = $_POST['MaKH'];
    $MaNV = $_POST['MaNV'];
    $NgayXuat = $_POST['NgayXuat'];
    $TongTienXuat = $_POST['TongTienXuat'];

    // query
    $sql = "INSERT INTO `PHIEUXUAT`(`MaPX`, `MaKH`, `MaNV`, `NgayXuat`, `TongTienXuat`)
    VALUES ('$MaPX', '$MaKH', '$MaNV', '$NgayXuat', '$TongTienXuat')";
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
