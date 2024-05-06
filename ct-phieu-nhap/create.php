<?php
include("../config.php");
if (isset($_POST['create'])) {
    $MaPN = $_POST['MaPN'];
    $MaHH = $_POST['MaHH'];
    $SLuongNhap = $_POST['SLuongNhap'];
    $GiaNhap = $_POST['GiaNhap'];

    // query
    $sql = "INSERT INTO `CTPHIEUNHAP`(`MaPN`, `MaHH`,  `SLuongNhap`, `GiaNhap`)
    VALUES ('$MaPN', '$MaHH', '$SLuongNhap', '$GiaNhap')";
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
