<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="imgesdoan/logo1.png">
    <title>sản phẩm - Bifood</title>
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="doan.css">
    <script src="https://kit.fontawesome.com/16b7c5b0f2.js" crossorigin="anonymous"></script>
    <script src="bootstrap/js/bootstrap.bundle.js"></script>
    <script src="bootstrap/js/bootstrap.js"></script>
</head>

<body>
    <div class="container-fluid">
        <nav class="navbar sticky-top navbar-expand-lg bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#"><img src="imgesdoan/logo1.png" class="logo"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item text-uppercase" title="Trang chủ">
                            <a class="nav-link active" aria-current="page" href="trangchu.php">Trang chủ</a>
                        </li>



                        </li>
                        <li class="nav-item text-uppercase" title="tin tức">
                            <a class="nav-link active" aria-current="page" href="tintuc.php">TIN TỨC</a>
                        </li>
                        <li class="nav-item text-uppercase" title="giới thiệu">
                            <a class="nav-link active" aria-current="page" href="gioithieu.php">GIỚI THIỆU</a>
                        </li>
                        <li class="nav-item text-uppercase" title="Liên hệ">
                            <a class="nav-link active" aria-current="page" href="lienhe.php">liện hệ</a>
                        </li>
                    </ul>
                    <form class="d-flex" role="search">
                        <input class=" search-txt" type="search" placeholder="Tìm kiếm..." aria-label="Search" title="Vui lòng điền vào ô này">
                        <a class="search-btn" href="#"><i class="fas fa-search"></i></a>
                    </form>
                    <a class="user" href="dangnhap.php">
                        <i class="far fa-user fs-5" title="Tài khoản"></i>
                    </a>
                    <a class="shopping" href="#">
                        <i class="fas fa-cart-plus fs-5">

            </i>
                    </a>
                </div>
            </div>
        </nav>




        <div class="container">
            <div class="content-button">
                <div class="row">
                    <div class="col-3">
                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle rounded-0" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                Sắp xếp theo
              </button>

                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                <li><a class="dropdown-item" href="#">tên</a></li>
                                <li><a class="dropdown-item" href="#">sản phẩm mới</a></li>
                                <li><a class="dropdown-item" href="#">sản phẩm ưa chuộng</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="content-product-important">
                <div class="row menu">
                    <div class="col-sm-3">
                        <div class="card rounded-0 border-white shadow" style="max-width: 16 rem;">
                            <a href="sanphamnho.html" class="ho"><img src="anh/camchaomao1.png" style="max-width: 100%;"></a>
                            <div class="card-boby cardh">
                                <a href="sanphamnho.html">
                                    <h6 class="card-title d1">Cám chào mào chiến 100gr</h6>
                                </a>
                                <p class="text-uppercase d1">15,000 ₫</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="card rounded-0 border-white shadow" style="max-width: 16 rem;">
                            <a href="#" class="ho"><img src="anh/camchaomao2.jpg" style="max-width: 100%;"></a>
                            <div class="card-boby cardh">
                                <a href="#">
                                    <h6 class="card-title d1">cám chào mào đỉnh 300gr</h6>
                                </a>
                                <p class="text-uppercase d1">35,000 ₫</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="card rounded-0 border-white shadow" style="max-width: 16 rem;">
                            <a href="#" class="ho"><img src="anh/camchaomao3.jpg" style="max-width: 100%;"></a>
                            <div class="card-boby cardh">
                                <a href="#">
                                    <h6 class="card-title d1">cám chào mào đỉnh 500gr</h6>
                                </a>
                                <p class="text-uppercase d1">50,000 ₫</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="card rounded-0 border-white shadow" style="max-width: 16 rem;">
                            <a href="#" class="ho"><img src="anh/camchaomao4.jpg" style="max-width: 100%;"></a>
                            <div class="card-boby cardh">
                                <a href="#">
                                    <h6 class="card-title d1">Cám chào mào TopTen (Dưỡng)</h6>
                                </a>
                                <p class="text-uppercase d1">90,000 ₫</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row menu">
                    <div class="col-sm-3">
                        <div class="card rounded-0 border-white shadow" style="max-width: 16 rem;">
                            <a href="#" class="ho"><img src="anh/camchaomao5.jpg" style="max-width: 100%;"></a>
                            <div class="card-boby cardh">
                                <a href="#">
                                    <h6 class="card-title d1">Cám Chào mào TopTen (Đấu)</h6>
                                </a>
                                <p class="text-uppercase d1">100,000 ₫</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="card rounded-0 border-white shadow" style="max-width: 16 rem;">
                            <a href="#" class="ho"><img src="anh/camchaomao6.png" style="max-width: 100%;"></a>
                            <div class="card-boby cardh">
                                <a href="#">
                                    <h6 class="card-title d1">Cám dâu trứng</h6>
                                </a>
                                <p class="text-uppercase d1">20,000 ₫</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="card rounded-0 border-white shadow" style="max-width: 16 rem;">
                            <a href="#" class="ho"><img src="anh/camchaomao1.png" style="max-width: 100%;"></a>
                            <div class="card-boby cardh">
                                <a href="#">
                                    <h6 class="card-title d1">Cám chào mào chiến 500gr</h6>
                                </a>
                                <p class="text-uppercase d1">70,000 ₫</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="card rounded-0 border-white shadow" style="max-width: 16 rem;">
                            <a href="#" class="ho"><img src="anh/camchaomao6.png" style="max-width: 100%;"></a>
                            <div class="card-boby cardh">
                                <a href="#">
                                    <h6 class="card-title d1">Cám dâu trứng 300gr</h6>
                                </a>
                                <p class="text-uppercase d1">35,000 ₫</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row menu">
                    <div class="col-sm-3">
                        <div class="card rounded-0 border-white shadow" style="max-width: 16 rem;">
                            <a href="#" class="ho"><img src="anh/camchaomao7.jfif"max-width: 100%;"></a>
                            <div class="card-boby cardh">
                                <a href="#">
                                    <h6 class="card-title d1">Cám hiển bảo khánh (đấu)</h6>
                                </a>
                                <p class="text-uppercase d1">90,000 ₫</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="card rounded-0 border-white shadow" style="max-width: 16 rem;">
                            <a href="#" class="ho"><img src="anh/camchaomao8.jfif" style="max-width: 100%;"></a>
                            <div class="card-boby cardh">
                                <a href="#">
                                    <h6 class="card-title d1">Cám chào mào bảo nguyên</h6>
                                </a>
                                <p class="text-uppercase d1">115,000 ₫</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="card rounded-0 border-white shadow" style="max-width: 16 rem;">
                            <a href="#" class="ho"><img src="anh/camchaomao9.jfif" style="max-width: 100%;"></a>

                            <div class="card-boby cardh">
                                <a href="#">
                                    <h6 class="card-title d1">Cám chào mào nam đà nẵng (Đấu)</h6>
                                </a>
                                <p class="text-uppercase d1">150,000 ₫</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="card rounded-0 border-white shadow" style="max-width: 16 rem;">
                            <a href="#" class="ho"><img src="anh/camchaomao10.jfif" style="max-width: 100%;"></a>
                            <div class="card-boby cardh">
                                <a href="#">
                                    <h6 class="card-title d1">Cám chào mào hiệp đồng nai</h6>
                                </a>
                                <p class="text-uppercase d1">150,000 ₫</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="content-pagination">
                <nav aria-label="Page navigation example">
                    <ul class="pagination">
                        <li class="page-item">
                            <a class="page-link" href="sanpham.html" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                            </a>
                        </li>
                        <li class="page-item"><a class="page-link" href="sanpham.html">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
        <!--fooder-->
        <div class="container-build fooderbg">
            <div class="container">
                <div class="row">
                    <div class="col-sm-4 menu">
                        <h6 class="text-secondary text-uppercase">
                            về chúng tôi
                        </h6>
                        <a href="#" class="fs-6"><strong></strong>
                            Bifood - OriO luôn cam kết với khách hàng mang lại các sản phẩm với giá cả
                            phải chăng, trên hết là chất lượng vượt trội. Sản phẩm được công ty nghiên 
                            cứu dựa trên kinh nghiệm thực tế tại Việt Nam. Nguồn nguyên liệu tốt nhất,
                             nguyên chất. 
                        </a>
                    </div>
                    <div class="col-sm-4 menu">
                        <h6 class="text-secondary text-uppercase">
                            liên hệ
                        </h6>
                        <a href="#" class="fs-6"><strong>Đìa chỉ:</strong>
                            Số 38/8 Đường số 8, P.Hiệp Bình Phước, Q.Thủ Đức, TP.HCM
                        </a>
                        <br>
                        <a href="#" class="fs-6"><strong>Điện thoại:</strong>
                            (08)66 787 420
                        </a>
                        <br>
                        <a href="#" class="fs-6"><strong>Điện thoại:</strong>
                            0918.34.6968
                        </a>

                        <br>
                        <a href="#" class="fs-6"><strong>Email #1:</strong>
                            bifood@yahoo.com.vn
                        </a>
                        <br>
                        <a href="#" class="fs-6"><strong>Email #2:</strong>
                            bifood.orio@gmail.com
                        </a>
                        <br>
                        <a href="#" class="fs-6"><strong>Website:</strong>
                            www.bifood.com.vn
                        </a>

                    </div>
                    <div class="col-sm-4 menu">
                        <h6 class="text-secondary text-uppercase">
                            tin tức
                        </h6>
                        <a href="#" class="fs-6">
                            Bột Nghệ Nguyên Chất Cho Gà Chọi Được Cung Cấp Chính Hãng
                        </a>
                        <br>
                        <a href="#" class="fs-6">
                            Bóp nghệ tươi cho Gà Đá Gà Chọi Tăng cường sức mạnh và sức đề kháng
                        </a>
                        <br>
                        <a href="#" class="fs-6">
                            Lợi Ích Của Nghệ Tươi Bóp Cho Gà Đá
                        </a>
                        <br>
                        <a href="#" class="fs-6">
                            Ra Mắt Dòng Nghệ Đỏ Nguyên Chất Cho Gà Đá
                        </a>

                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 text-center">
                        © Bifood
                    </div>
                </div>
            </div>
        </div>



        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>