<?php

$server = "localhost";
$user = "root";
$password = "12345678";
$nama_database = "QuanLyST";

$db = mysqli_connect($server, $user, $password, $nama_database);

if (!$db)
    die("Không thể kết nối với database: " . mysqli_connect_error());
