<?php
include("../config.php");

if (isset($_POST['edit_data'])) {
    // Lấy dữ liệu từ form
    $MaKH = $_POST['edit_MaKH'];
    $TenKH = $_POST['edit_TenKH'];
    $GioiTinh = $_POST['edit_GioiTinh'];
    $STKKH = $_POST['edit_STKKH'];

    // query
    $sql = "UPDATE `KHACHHANG` SET `TenKH`='$TenKH',`GioiTinh`='$GioiTinh',`STKKH`='$STKKH' WHERE `MaKH` = '$MaKH'";
    
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
