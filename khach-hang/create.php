<?php
include("../config.php");
if (isset($_POST['create'])) {
    $MaKH = $_POST['MaKH'];
    $TenKH = $_POST['TenKH'];
    $GioiTinh = $_POST['GioiTinh'];
    $STKKH = $_POST['STKKH'];

    // query
    $sql = "INSERT INTO `KHACHHANG`(`MaKH`, `TenKH`, `GioiTinh`, `STKKH`)
    VALUES ('$MaKH', '$TenKH', '$GioiTinh', '$STKKH')";
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
