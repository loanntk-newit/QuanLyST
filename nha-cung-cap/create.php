<?php
include("../config.php");
if (isset($_POST['create'])) {
    $MaNCC = $_POST['MaNCC'];
    $TenNCC = $_POST['TenNCC'];
    $DiaChiNCC = $_POST['DiaChiNCC'];
    $SoDTNCC = $_POST['SoDTNCC'];
    $SoTKNCC = $_POST['SoTKNCC'];

    // query
    $sql = "INSERT INTO `NHACUNGCAP`(`MaNCC`, `TenNCC`, `DiaChiNCC`, `SoDTNCC`, `SoTKNCC`)
    VALUES ('$MaNCC', '$TenNCC', '$DiaChiNCC', '$SoDTNCC', '$SoTKNCC')";

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
