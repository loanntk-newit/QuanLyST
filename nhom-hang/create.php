<?php
include("../config.php");
if (isset($_POST['create'])) {
    $ma_nhom = $_POST['ma-nhom'];
    $ten_nhom = $_POST['ten-nhom'];

    // query
    $sql = "INSERT INTO `NHOMHANG`(`MaNhom`, `TenNhom`)
    VALUES ('$ma_nhom', '$ten_nhom')";
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
