<?php
include "connect.php";

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Retrieve the form data
    $tensanpham = $_POST['tensanpham'];
    $gia = $_POST['gia'];
   
    $mota = $_POST['mota'];
   

    if (isset($_POST['submit'])) {
        if (getimagesize($_FILES['anh_sanpham']['tmp_name']) == false) {
            echo "<br />Please select an image.";
        } else {
            // Prepare image data for insertion
            $image = addslashes(file_get_contents($_FILES['anh_sanpham']['tmp_name']));

            // Prepare and execute the SQL query to insert the product into the database
            $insertQuery = "INSERT INTO SanPham (TenSanPham, GiaBan, SoLuongTrongKho, MoTaSanPham, AnhSanPham, Kichthuoc, Trongluongsanpham, Dientichmanhinh, Ram, Dungluongpin, Thoigianbaohang, MaNhaSanXuat) VALUES ('$tenSanPham', $giaBan, $soLuongTrongKho, '$moTaSanPham', '$image', '$kichThuoc', '$trongLuongSanPham', '$dienTichManHinh', '$ram', '$dungLuongPin', '$thoiGianBaoHanh', $maNhaSanXuat)";

            if ($conn->query($insertQuery) === TRUE) {
                header("Location: http://localhost/doanprovip/admin/dashboardd_sanpham.php");
                exit;
            } else {
                echo "Error adding product: " . mysqli_error($conn);
            }
        }
    }
}
?>