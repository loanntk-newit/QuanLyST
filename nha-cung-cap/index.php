<?php include("../config.php"); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Belajar Dasar CRUD dengan PHP dan MySQL">
    <title>Nhà Cung Cấp | Quản Lý Siêu Thị</title>

    <!-- bootstrap cdn -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <!-- material icon -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

    <!-- font awesome -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

    <link rel="stylesheet" href="../css/style.css">
</head>

<body class="bg-light">
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white border-bottom" style="position: sticky !important;
    top: 0 !important; z-index : 99999 !important;">
        <div class="container-fluid container">
            <a class="navbar-brand" href="#">Quản Lý Siêu Thị</a>
            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto ">
                    <li class="nav-item">
                        <a class="nav-link text-sm-start text-center" href="/nhom-hang">Nhóm Hàng</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-sm-start text-center" href="/hang-hoa">Hàng Hóa</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-sm-start text-center" href="/khach-hang">Khách Hàng</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active text-sm-start text-center" aria-current="page" href="/nha-cung-cap">Nhà Cung Cấp</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-sm-start text-center" href="/nhan-vien">Nhân Viên</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-sm-start text-center" href="/phieu-nhap">Phiếu Nhập</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-sm-start text-center" href="/phieu-xuat">Phiếu Xuất</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-sm-start text-center" href="/ct-phieu-nhap">CT Phiếu Nhập</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-sm-start text-center" href="/ct-phieu-xuat">CT Phiếu Xuất</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    <div class="container mt-5">
        <!-- form QuanLyST -->
        <div class="card mb-5">
            <!-- <div class="card-header">
                Latihan CRUD PHP & MySQL
            </div> -->
            <!-- Nhà Cung Cấp data -->
            <div class="card-body">
                <h3 class="card-title">Nhà Cung Cấp</h3>
                <!-- Hiển thị thông báo đã thêm thành công -->
                <?php if (isset($_GET['status'])) : ?>
                    <?php
                    if ($_GET['status'] == 'success')
                        echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
                        <strong>Dữ liệu được thêm thành công!</strong>
                        <button type='button' class='btn-close' onclick='clicking()' data-bs-dismiss='alert' aria-label='Close'></button>
                      </div>";
                    else
                        echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
                        <strong>Dữ liệu được thêm không thành công!</strong>
                        <button type='button' class='btn-close' onclick='clicking()' data-bs-dismiss='alert' aria-label='Close'></button>
                      </div>";
                    ?>
                <?php endif; ?>

                <form class="row g-3" action="create.php" method="POST">


                    <div class="col-md-6">
                        <label for="MaNCC" class="form-label">Mã Nhà Cung Cấp</label>
                        <input type="text" name="MaNCC" class="form-control" placeholder="MNCC1" required>
                    </div>

                    <div class="col-md-6">
                        <label for="TenNCC" class="form-label">Tên Nhà Cung Cấp</label>
                        <input type="text" name="TenNCC" class="form-control" placeholder="Tên Nhà Cung Cấp" required>
                    </div>

                    <div class="col-md-6">
                        <label for="SoDTNCC" class="form-label">Số Điện Thoại</label>
                        <input type="text" name="SoDTNCC" class="form-control" placeholder="0123456789" required>
                    </div>

                    <div class="col-md-6">
                        <label for="SoTKNCC" class="form-label">Số Tài Khoản</label>
                        <input type="text" name="SoTKNCC" class="form-control" placeholder="0123456789" required>
                    </div>

                    <div class="col-md-12">
                        <label for="DiaChiNCC" class="form-label">Địa Chỉ</label>
                        <input type="text" name="DiaChiNCC" class="form-control" placeholder="Địa Chỉ" required>
                    </div>

                    <div class="col-12">
                        <button type="submit" class="btn btn-primary" value="create" name="create"><i class="fa fa-plus"></i><span class="ms-2">Tạo mới</span></button>
                    </div>
                </form>
            </div>
        </div>

        <!-- Hiển thị tin nhắn đã xóa thành công -->
        <?php if (isset($_GET['create'])) : ?>
            <?php
            if ($_GET['create'] == 'success')
                echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
                        <strong>Dữ liệu đã được xóa thành công!</strong>
                        <button type='button' class='btn-close' onclick='clicking()' data-bs-dismiss='alert' aria-label='Close'></button>
                      </div>";
            else
                echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
                        <strong>Xóa dữ liệu không thành công!</strong>
                        <button type='button' class='btn-close' onclick='clicking()' data-bs-dismiss='alert' aria-label='Close'></button>
                      </div>";
            ?>
        <?php endif; ?>

        <!-- Hiển thị thông báo chỉnh sửa thành công -->
        <?php if (isset($_GET['update'])) : ?>
            <?php
            if ($_GET['update'] == 'success')
                echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
                        <strong>Dữ liệu được cập nhật thành công!</strong>
                        <button type='button' class='btn-close' onclick='clicking()' data-bs-dismiss='alert' aria-label='Close'></button>
                      </div>";
            else
                echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
                        <strong>Dữ liệu không cập nhật được!</strong>
                        <button type='button' class='btn-close' onclick='clicking()' data-bs-dismiss='alert' aria-label='Close'></button>
                      </div>";
            ?>
        <?php endif; ?>

        <!-- tabel -->
        <div class="table-responsive mb-5 card">
            <?php
            echo "<div class='card-body'>";

            echo "<table class='table table-hover align-middle bg-white'>";
            echo "<thead>";
            echo "<tr>";
            echo "<th scope='col' class='text-center'>STT</th>";
            echo "<th scope='col'>Mã NCC</th>";
            echo "<th scope='col'>Tên Nhà Cung Cấp</th>";
            echo "<th scope='col'>Số Điện Thoại</th>";
            echo "<th scope='col'>Số Tài Khoản</th>";
            echo "<th scope='col'>Số Địa Chỉ</th>";
            echo "<th scope='col' class='text-center'></th>";
            echo "</tr>";
            echo "</thead>";
            echo "<tbody>";



            $per_page = 10;
            $list = isset($_GET['list']) ? (int)$_GET['list'] : 1;
            $page = ($list > 1) ? ($list * $per_page) - $per_page : 0;

            $previous = $list - 1;
            $next = $list + 1;

            $data = mysqli_query($db, "SELECT * FROM NHACUNGCAP");
            $amount_data = mysqli_num_rows($data);
            $total_pages = ceil($amount_data / $per_page);

            $data_mhs = mysqli_query($db, "SELECT * FROM NHACUNGCAP LIMIT $page, $per_page");
            $no = $page + 1;



            while ($data = mysqli_fetch_array($data_mhs)) {
                echo "<tr>";
                echo "<td style='display:none'>" . $data['MaNCC'] . "</td>";
                echo "<td class='text-center'>" . $no++ . "</td>";
                echo "<td>" . $data['MaNCC'] . "</td>";
                echo "<td>" . $data['TenNCC'] . "</td>";
                echo "<td>" . $data['SoDTNCC'] . "</td>";
                echo "<td>" . $data['SoTKNCC'] . "</td>";
                echo "<td>" . $data['DiaChiNCC'] . "</td>";

                echo "<td class='text-center'>";

                echo "<button type='button' class='btn btn-primary editButton pad m-1'><span class='material-icons align-middle'>edit</span></button>";

                echo "
                            <!-- Button trigger modal -->
                            <button type='button' class='btn btn-danger deleteButton pad m-1'><span class='material-icons align-middle'>delete</span></button>";
                echo "</td>";

                echo "</tr>";
            }

            echo "</tbody>";
            echo "</table>";
            if ($amount_data == 0) {
                echo "<p class='text-center'>Không có dữ liệu.</p>";
            } else {
                echo "<p>$amount_data bản ghi</p>";
            }

            echo "</div>";
            ?>
        </div>

        <!-- pagination -->
        <nav class="mt-5 mb-5">
            <ul class="pagination justify-content-center">
                <li class="page-item">
                    <a class="page-link" <?php echo ($list > 1) ? "href='?list=$previous'" : "" ?>><i class="fa fa-chevron-left"></i></a>
                </li>
                <?php
                for ($x = 1; $x <= $total_pages; $x++) {
                ?>
                    <li class="page-item"><a class="page-link" href="?list=<?php echo $x ?>"><?php echo $x; ?></a></li>
                <?php
                }
                ?>
                <li class="page-item">
                    <a class="page-link" <?php echo ($list < $total_pages) ? "href='?list=$next'" : "" ?>><i class="fa fa-chevron-right"></i></a>
                </li>
            </ul>
        </nav>

        <!-- Modal Edit-->
        <div class='modal fade' style="top:58px !important;" id='editModal' tabindex='-1' aria-labelledby='exampleModalLabel' aria-hidden='true'>
            <div class='modal-dialog' style="margin-bottom:100px !important;">
                <div class='modal-content'>
                    <div class='modal-header'>
                        <h5 class='modal-title' id='exampleModalLabel'>Chỉnh sửa</h5>
                        <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
                    </div>

                    <?php
                    $sql = "SELECT * FROM NHACUNGCAP";
                    $query = mysqli_query($db, $sql);
                    $data = mysqli_fetch_array($query);

                    $nhomHang = mysqli_query($db, "SELECT * FROM `NHOMHANG`");
                    ?>

                    <form action='edit.php' method='POST'>
                        <div class='modal-body text-start'>
                            <input type='hidden' name='edit_id' id='edit_id'>

                            <div class="col-12 mb-3">
                                <label for="edit_MaNCC" class="form-label">Mã Nhà Cung Cấp</label>
                                <input type="text" name="edit_MaNCC" id="edit_MaNCC" class="form-control" placeholder="MNCC1" readonly>
                            </div>

                            <div class="col-12 mb-3">
                                <label for="edit_TenNCC" class="form-label">Tên Nhà Cung Cấp</label>
                                <input type="text" name="edit_TenNCC" id="edit_TenNCC" class="form-control" placeholder="Tên Nhà Cung Cấp" required>
                            </div>

                            <div class="col-12 mb-3">
                                <label for="edit_SoDTNCC" class="form-label">Số Điện Thoại</label>
                                <input type="text" name="edit_SoDTNCC" id="edit_SoDTNCC" class="form-control" placeholder="0123456789" required>
                            </div>

                            <div class="col-12 mb-3">
                                <label for="edit_SoTKNCC" class="form-label">Số Tài Khoản</label>
                                <input type="text" name="edit_SoTKNCC" id="edit_SoTKNCC" class="form-control" placeholder="0123456789" required>
                            </div>

                            <div class="col-12 mb-3">
                                <label for="edit_DiaChiNCC" class="form-label">Địa Chỉ</label>
                                <input type="text" name="edit_DiaChiNCC" id="edit_DiaChiNCC" class="form-control" placeholder="Địa Chỉ" required>
                            </div>
                        </div>

                        <div class='modal-footer'>
                            <button type='submit' name='edit_data' class='btn btn-primary'>Lưu</button>
                        </div>

                    </form>


                </div>
            </div>
        </div>


        <!-- Modal Delete-->
        <div class='modal fade' style="top:58px !important;" id='deleteModal' tabindex='-1' aria-labelledby='exampleModalLabel' aria-hidden='true'>
            <div class='modal-dialog'>
                <div class='modal-content'>
                    <div class='modal-header'>
                        <h5 class='modal-title' id='exampleModalLabel'>Xác Nhận</h5>
                        <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
                    </div>


                    <form action='delete.php' method='POST'>

                        <div class='modal-body text-start'>
                            <input type='hidden' name='delete_id' id='delete_id'>
                            <p>Bạn có chắc chắn muốn xóa dữ liệu này?</p>
                        </div>

                        <div class='modal-footer'>
                            <button type='submit' name='delete' class='btn btn-primary'>Gửi</button>
                        </div>

                    </form>


                </div>
            </div>
        </div>


        <!-- tutup container -->
    </div>


    <!-- Jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Javascript bule with popper bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    <!-- sweet alert -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

    <!-- edit function -->
    <script>
        $(document).ready(function() {
            $('.editButton').on('click', function() {
                $('#editModal').modal('show');

                $tr = $(this).closest('tr');

                var data = $tr.children("td").map(function() {
                    return $(this).text();
                }).get();

                console.log(data);
                $('#edit_MaNCC').val(data[2]);
                $('#edit_TenNCC').val(data[3]);
                $('#edit_SoDTNCC').val(data[4]);
                $('#edit_SoTKNCC').val(data[5]);
                $('#edit_DiaChiNCC').val(data[6]);
            });
        });
    </script>

    <!-- delete function -->
    <script>
        $(document).ready(function() {
            $('.deleteButton').on('click', function() {
                $('#deleteModal').modal('show');

                $tr = $(this).closest('tr');

                var data = $tr.children("td").map(function() {
                    return $(this).text();
                }).get();

                console.log(data);
                $('#delete_id').val(data[0]);
            });
        });
    </script>

    <script>
        function clicking() {
            window.location.href = './index.php';
        }
    </script>
</body>

</html>