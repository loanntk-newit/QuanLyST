<?php
include("../config.php");

if (isset($_POST['edit_data'])) {
    // Lấy dữ liệu từ form
    $MaPN = $_POST['edit_MaPN'];
    $MaHH = $_POST['edit_MaHH'];
    $SLuongNhap = $_POST['edit_SLuongNhap'];
    $GiaNhap = $_POST['edit_GiaNhap'];

    // query
    $sql = "UPDATE `CTPHIEUNHAP` SET `SLuongNhap`='$SLuongNhap',`GiaNhap`='$GiaNhap' WHERE `MaPN` = '$MaPN' AND `MaHH` = '$MaHH'";

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
