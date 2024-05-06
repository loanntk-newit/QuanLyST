<?php
include("../config.php");

if (isset($_POST['delete'])) {
    $id = $_POST['delete_id'];
    $sql = "DELETE FROM `NHOMHANG` WHERE `MaNhom` = '$id'";

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
