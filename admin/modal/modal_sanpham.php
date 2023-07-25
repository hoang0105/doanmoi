<!-- Modal for adding new product -->
<div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="addModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addModalLabel">Thêm sản phẩm mới</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="http://localhost/doanprovip/admin/xulyadd_sanpham.php" method="POST"
                    enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="ten_sanpham" class="form-label">Tên sản phẩm:</label>
                        <input type="text" class="form-control" id="ten_sanpham" name="ten_sanpham">
                    </div>
                    <div class="mb-3">
                        <label for="gia" class="form-label">Đơn giá:</label>
                        <input type="number" class="form-control" id="gia" name="gia">
                    </div>
                    <div class="mb-3">
                        <label for="so_luong" class="form-label">Số lượng trong kho:</label>
                        <input type="number" class="form-control" id="so_luong" name="so_luong">
                    </div>
                    <div class="mb-3">
                        <label for="mo_ta" class="form-label">Mô tả:</label>
                        <textarea class="form-control" id="mo_ta" name="mo_ta"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="anh_sanpham" class="form-label">Ảnh sản phẩm:</label>
                        <input type="file" class="form-control" id="anh_sanpham" name="anh_sanpham">
                    </div>
                    
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
                        <input type="submit" class="btn btn-primary" name="submit" value="Add">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Edit Modal -->
<div class="modal fade" id="editModal<?php echo $row['MaSanPham']; ?>" tabindex="-1"
    aria-labelledby="editModalLabel<?php echo $row['MaSanPham']; ?>" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editModalLabel<?php echo $row['MaSanPham']; ?>">
                    Chỉnh sửa thông tin sản phẩm</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="http://localhost/DO_AN_PHP_MYSQL_2023/admin/uploads/xulyedit_sanpham.php" method="POST"
                    enctype="multipart/form-data">
                    <input type="hidden" name="MaSanPham" id="MaSanPham" value="<?php echo $row['MaSanPham']; ?>">
                    <div class="mb-3">
                        <label for="ten_sanpham_<?php echo $row['MaSanPham']; ?>" class="form-label">Tên sản
                            phẩm:</label>
                        <input type="text" class="form-control" id="ten_sanpham_<?php echo $row['MaSanPham']; ?>"
                            name="ten_sanpham_<?php echo $row['MaSanPham']; ?>"
                            value="<?php echo $row['TenSanPham']; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="gia_ban_<?php echo $row['MaSanPham']; ?>" class="form-label">Giá bán:</label>
                        <input type="text" class="form-control" id="gia_ban_<?php echo $row['MaSanPham']; ?>"
                            name="gia_ban_<?php echo $row['MaSanPham']; ?>" value="<?php echo $row['GiaBan']; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="so_luong_trong_kho_<?php echo $row['MaSanPham']; ?>" class="form-label">Số lượng
                            trong kho:</label>
                        <input type="text" class="form-control" id="so_luong_trong_kho_<?php echo $row['MaSanPham']; ?>"
                            name="so_luong_trong_kho_<?php echo $row['MaSanPham']; ?>"
                            value="<?php echo $row['SoLuongTrongKho']; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="mo_ta_sp_<?php echo $row['MaSanPham']; ?>" class="form-label">Mô tả sản
                            phẩm:</label>
                        <textarea type="text" class="form-control" id="mo_ta_sp_<?php echo $row['MaSanPham']; ?>"
                            name="mo_ta_sp_<?php echo $row['MaSanPham']; ?>"
                            placeholder="<?php echo $row['MoTaSanPham']; ?>"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="anh_sp_<?php echo $row['MaSanPham']; ?>" class="form-label">Ảnh sản
                            phẩm:</label>
                        <!-- Hiển thị ảnh hiện tại -->
                        <img src="data:image/jpeg;base64,<?php echo base64_encode($anhSanPham); ?>" alt="Ảnh sản phẩm">

                        <!-- Trường đầu vào file để cập nhật ảnh -->
                        <input type="file" class="form-control" id="anh_sp_<?php echo $row['MaSanPham']; ?>"
                            name="anh_sp_<?php echo $row['MaSanPham']; ?>" accept="image/*">
                    </div>
                   
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
                        <input class="btn btn-primary" type="submit" value="Edit">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>