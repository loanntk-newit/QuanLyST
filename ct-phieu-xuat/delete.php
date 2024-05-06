<?php
include("../config.php");

if (isset($_POST['delete'])) {
    $MaPX = $_POST['delete_MaPX'];
    $MaHH = $_POST['delete_MaHH'];
    $sql = "DELETE FROM `CTPHIEUXUAT` WHERE `MaPX` = '$MaPX' AND `MaHH` = '$MaHH'";

    try {
        $query = mysqli_query($db, $sql);
        if ($query) {
            header('Location: ./index.php?list=success');
        } else
            header('Location: ./index.php?list=fail');
    } catch (\Throwable $th) {
        header('Location: ./index.php?list=fail');
    }
} else
    die("Có lỗi xảy ra....");
