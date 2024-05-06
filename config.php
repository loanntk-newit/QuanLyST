<?php

$server = "localhost";
$user = "root";
$password = "12345678";
$nama_database = "QuanLyST";

$db = mysqli_connect($server, $user, $password, $nama_database);

if (!$db)
    die("Không thể kết nối với database: " . mysqli_connect_error());


// /* Địa chỉ SQL Server */
// $server = "127.0.0.1,1433";
// /* Tài khoản kết nối */
// $uid = 'sa';
// $pwd = 'Password123';
// $database = 'QuanLyST';

// try {
//     // Chú ý thông tin kết nối bắt đầu bởi sqlsrv: cho biết PDO dùng driver PDO_SQLSRV
//     $conn = new PDO("sqlsrv:server=$server;Database = $database", $uid, $pwd);
//     $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
// } catch (PDOException $e) {
//     die("Lỗi kết nối MS SQL Server: " . $e->getMessage());
// }