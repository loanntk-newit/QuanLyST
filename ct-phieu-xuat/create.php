<?php
include("../config.php");
if (isset($_POST['create'])) {
    $MaPX = $_POST['MaPX'];
    $MaHH = $_POST['MaHH'];
    $SLuongBan = $_POST['SLuongBan'];
    $GiaNhap = $_POST['GiaNhap'];

    // query
    $sql = "INSERT INTO `CTPHIEUXUAT`(`MaPX`, `MaHH`,  `SLuongBan`, `GiaNhap`)
    VALUES ('$MaPX', '$MaHH', '$SLuongBan', '$GiaNhap')";
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
