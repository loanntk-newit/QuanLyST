<?php
include("../config.php");

if (isset($_POST['edit_data'])) {
    // Lấy dữ liệu từ form
    $MaPX = $_POST['edit_MaPX'];
    $MaHH = $_POST['edit_MaHH'];
    $SLuongBan = $_POST['edit_SLuongBan'];
    $GiaNhap = $_POST['edit_GiaNhap'];

    // query
    $sql = "UPDATE `CTPHIEUXUAT` SET `SLuongBan`='$SLuongBan',`GiaNhap`='$GiaNhap' WHERE `MaPX` = '$MaPX' AND `MaHH` = '$MaHH'";

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
