<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.css">
</head>

<body>
    <?php
    // if (!isset($_SESSION['username'])) {
    //     // Redirect to the login page
    //     header("Location: http://localhost/doanprovip/admin/view/nic/login.php");
    //     exit;
    // }
    ?>
    <style>
        .edit-btn {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 5px 10px;
            border-radius: 3px;
            cursor: pointer;
        }

        .delete-btn {
            background-color: #dc3545;
            color: #fff;
            border: none;
            padding: 5px 10px;
            border-radius: 3px;
            cursor: pointer;
        }

        .edit-btn i,
        .delete-btn i {
            margin-right: 5px;
        }
    </style>

    <?php
    include "../connect.php";
    $sql = "select * from tbl_user";
    $query = mysqli_query($conn, $sql);
    ?>
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                <h2>Danh sách nhân viên</h2>
            </div>
            <div class="card-footer text-muted">
                <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addModal">Thêm mới</button>
                <?php include '../modal/modal_nhanvien.php' ?>
            </div>
            <div class="card-body">
                <table id="productTable" class="table">
                    <thead class="thead-dark">
                        <tr style="font-size: 15px;">
                            <th>ID</th>
                            
                            <th>TÊN ĐĂNG NHẬP</th>
                            <th>mat khau </th>
                            <th>role </th>
                           
                           
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $i = 1;
                        while ($row = mysqli_fetch_assoc($query)) {
                            
                            $id = $row["id"];
                            ?>
                            <tr style="font-size: 13px;">
                                <td>
                                    <?php echo $i++; ?>
                                </td>
                                <td>
                                    <?php echo $row['user']; ?>
                                </td>
                                <td>
                                    <?php echo $row['pass']; ?>
                                </td>
                                <td>
                                    <?php echo $row['role']; ?>
                                </td>
                                
                                
                                <td>
                                <?php if($row['role']==1){
                                        echo "admin";}else{echo "user";}; ?>
                                </td>
                                <td>
                                    <button class="edit-btn" data-bs-toggle="modal"
                                        data-bs-target="#editModal<?php echo $row['id']; ?>">
                                        <i class="fas fa-cogs"></i>
                                    </button>
                                    <?php include '../modal/modal_nhanvien.php' ?>
                                    <button class="delete-btn" data-id="<?php echo $row['id']; ?>"
                                        onclick="deleteProduct(<?php echo $row['id']; ?>)"><i
                                            class="fas fa-trash"></i></button>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <style>
        th {
            border-top: 1px solid #ccc;
            border-left: 1px solid #ccc;
            border-right: 1px solid #ccc;
            border-bottom: 1px solid #ccc;
        }

        th:last-child {
            border-right: none;
        }

        td {
            border-left: 1px solid #ccc;
            border-right: 1px solid #ccc;
            border-bottom: 1px solid #ccc;
        }
    </style>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.js"></script>
    <script>
        $(document).ready(function () {
            $('#productTable').DataTable();
        });
    </script>
    <script>
        function deleteProduct(productId) {
            if (confirm("Bạn có chắc chắn muốn xóa sản phẩm này?")) {
                // Gửi yêu cầu xóa sản phẩm bằng AJAX
                var xhr = new XMLHttpRequest();
                xhr.open("POST", "http://localhost/DO_AN_PHP_MYSQL_2023/admin/uploads/xulydelete_sanpham.php", true);
                xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
                xhr.onreadystatechange = function () {
                    if (xhr.readyState === 4 && xhr.status === 200) {
                        // Xử lý phản hồi từ máy chủ sau khi xóa thành công
                        alert(xhr.responseText);
                        // Refresh trang để cập nhật danh sách sản phẩm
                        location.reload();
                    }
                };
                xhr.send("id_sanpham=" + productId);
            }
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
        crossorigin="anonymous"></script>
</body>

</html>