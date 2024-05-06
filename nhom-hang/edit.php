<?php
include("../config.php");

if (isset($_POST['edit_data'])) {
    // Lấy dữ liệu từ form
    $ma_nhom = $_POST['edit_ma_nhom'];
    $ten_nhom = $_POST['edit_ten_nhom'];

    // query
    $sql = "UPDATE `NHOMHANG` SET `TenNhom` = '$ten_nhom' WHERE `MaNhom` = '$ma_nhom'";
    
    try {
        $query = mysqli_query($db, $sql);
        if ($query)
            header('Location: ./index.php?update=success');
        else
            header('Location: ./index.php?update=fail');
    } catch (\Throwable $th) {
        header('Location: ./index.php?update=fail');
    }
} else
    die("Có lỗi xảy ra...");
