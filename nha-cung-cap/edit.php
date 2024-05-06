<?php
include("../config.php");

if (isset($_POST['edit_data'])) {
    // Lấy dữ liệu từ form
    $MaNCC = $_POST['edit_MaNCC'];
    $TenNCC = $_POST['edit_TenNCC'];
    $DiaChiNCC = $_POST['edit_DiaChiNCC'];
    $SoDTNCC = $_POST['edit_SoDTNCC'];
    $SoTKNCC = $_POST['edit_SoTKNCC'];

    // query
    $sql = "UPDATE `NHACUNGCAP` SET `TenNCC`='$TenNCC',`DiaChiNCC`='$DiaChiNCC',`SoDTNCC`='$SoDTNCC',`SoTKNCC`='$SoTKNCC' WHERE `MaNCC` = '$MaNCC'";
    
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
