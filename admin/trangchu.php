<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="imgesdoan/logo1.png">
    <title>Bifood</title>
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

                        <li class="nav-item dropdown text-uppercase " title="sản phẩm">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
		            sản phẩm 
		          </a>
                            <ul class="dropdown-menu rounded-0" aria-labelledby="navbarDropdown">
                                <li title="Cám chim chào mào"><a class="dropdown-item" href="sanpham.php">Cám chim chào mào</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li title="Cám họa mi-khứu"><a class="dropdown-item" href="#">Cám họa mi-khứu</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li class="nav-item dropend" title="cám chim tổng hợp"><a class="dropdown-item" href="#">cám chim tổng hợp</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li title="Cám nền Bifood"><a class="dropdown-item" href="#">Cám nền Bifood</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li title="Thức ăn gà đá"><a class="dropdown-item" href="#">Thức ăn gà đá</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li title="Thức ăn cá cảnh"><a class="dropdown-item" href="#">Thức ăn cá cảnh</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li title="Nước tắm chim"><a class="dropdown-item" href="#">Nước tắm chim</a></li>
                                <li>
                                    <hr class="dropdown-divider">

                            </ul>
                            </li>
                            <li class="nav-item text-uppercase" title="tin tuc">
                                <a class="nav-link active" aria-current="page" href="tintuc.php">tin tức</a>
                            </li>
                            <li class="nav-item text-uppercase" title="giới thiệu">
                                <a class="nav-link active" aria-current="page" href="gioithieu.php">giới thiệu</a>
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

        <div class="connet">
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>

                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="imgesdoan/connet-1.png" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="imgesdoan/connet_2.png" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="imgesdoan/connet_3.png" class="d-block w-100" alt="...">
                    </div>

                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
			    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
			    <span class="visually-hidden">Previous</span>
			  </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
			    <span class="carousel-control-next-icon" aria-hidden="true"></span>
			    <span class="visually-hidden">Next</span>
			  </button>
            </div>
        </div>

        <section class="container py-5">

            <div class="row">
                <div class="col-12 col-md-4 p-5 mt-3">
                    <a href="#"><img src="imgesdoan/anh4.jpg" class="rounded-circle img-fluid border"></a>
                    <h5 class="text-center mt-3 mb-3">Thức ăn cho chim</h5>

                </div>
                <div class="col-12 col-md-4 p-5 mt-3">
                    <a href="#"><img src="imgesdoan/anh2.jpg" class="rounded-circle img-fluid border"></a>
                    <h2 class="h5 text-center mt-3 mb-3">Thức ăn cho gà</h2>

                </div>
                <div class="col-12 col-md-4 p-5 mt-3">
                    <a href="#"><img src="imgesdoan/anh3.jpg" class="rounded-circle img-fluid border"></a>
                    <h2 class="h5 text-center mt-3 mb-3">Thức ăn cho cá</h2>

                </div>
            </div>
        </section>


        <div class="container-build">
            <a href="#"><img src="imgesdoan/connet-66.jpg" class="content2"></a>
        </div>

        <div class="container menu" id="sanphammoi">
            <div class="h4 pb-2 mb-4  border-bottom border-dark">
                SẢN PHẨM CỦA CHÚNG TÔI
            </div>
            <div class="row menu">
                <div class="col-sm-3">
                    <div class="card rounded-0 border-white shadow" style="max-width: 16 rem;">
                        <a href="sanphamnho.html" class="ho"><img src="anh/sp1.png" style="max-width: 100%;"></a>
                        <div class="card-boby cardh">
                            <a href="sanphamnho.html">
                                <h6 class="card-title d1">Bột Nghệ Đỏ (Om) Bóp Gà Đá 700GR</h6>
                            </a>
                            <p class="text-uppercase d1">120,000 ₫</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="card rounded-0 border-white shadow" style="max-width: 16 rem;">
                        <a href="#" class="ho"><img src="anh/sp2.png" style="max-width: 100%;"></a>
                        <div class="card-boby cardh">
                            <a href="#">
                                <h6 class="card-title d1">Hủ Nghệ Đỏ 150GR</h6>
                            </a>
                            <p class="text-uppercase d1">30,000 ₫</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="card rounded-0 border-white shadow" style="max-width: 16 rem;">
                        <a href="#" class="ho"><img src="anh/sp3.png" style="max-width: 100%;"></a>
                        <div class="card-boby cardh">
                            <a href="#">
                                <h6 class="card-title d1">Hủ Nghệ Tươi-Om Bóp Gà Đá</h6>
                            </a>
                            <p class="text-uppercase d1">65,000 ₫</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="card rounded-0 border-white shadow" style="max-width: 16 rem;">
                        <a href="#" class="ho"><img src="anh/sp4.png" style="max-width: 100%;"></a>
                        <div class="card-boby cardh">
                            <a href="#">
                                <h6 class="card-title d1">Chim Cu Gáy - Và Các Loại Chim Ăn Hạt</h6>
                            </a>
                            <p class="text-uppercase d1">15,000 ₫</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row menu">
                <div class="col-sm-3">
                    <div class="card rounded-0 border-white shadow" style="max-width: 16 rem;">
                        <a href="#" class="ho"><img src="anh/sp5.png" style="max-width: 100%;"></a>
                        <div class="card-boby cardh">
                            <a href="#">
                                <h6 class="card-title d1">Cám Nền Bifood-Bao 24kg</h6>
                            </a>
                            <p class="text-uppercase d1">1,080,000 ₫</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="card rounded-0 border-white shadow" style="max-width: 16 rem;">
                        <a href="#" class="ho"><img src="anh/sp6.png" style="max-width: 100%;"></a>
                        <div class="card-boby cardh">
                            <a href="#">
                                <h6 class="card-title d1">Cám Nền Bifood - Túi 2 kg</h6>
                            </a>
                            <p class="text-uppercase d1">90,000 ₫</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="card rounded-0 border-white shadow" style="max-width: 16 rem;">
                        <a href="#" class="ho"><img src="anh/sp7.png" style="max-width: 100%;"></a>
                        <div class="card-boby cardh">
                            <a href="#">
                                <h6 class="card-title d1">Cám Gà Chiến Túi 1.4 kg</h6>
                            </a>
                            <p class="text-uppercase d1">58,000 ₫</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="card rounded-0 border-white shadow" style="max-width: 16 rem;">
                        <a href="#" class="ho"><img src="anh/sp8.png" style="max-width: 100%;"></a>
                        <div class="card-boby cardh">
                            <a href="#">
                                <h6 class="card-title d1">Cám Gà Chiến Hủ 1.4 kg</h6>
                            </a>
                            <p class="text-uppercase d1">66,000 ₫</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12 text-center text-secondary">
                    <a href="#">Xem Thêm <i class="fas fa-angle-down"></i></a>
                </div>
            </div>

            <!-- chao maoo -->

            <div class="container menu" id="sanphammoi">
                <div class="h4 pb-2 mb-4  border-bottom border-dark">
                    SẢN PHẨM CÁM CHIM CHÀO MÀO
                </div>
                <div class="row menu">
                    <div class="col-sm-3">
                        <div class="card rounded-0 border-white shadow" style="max-width: 16 rem;">
                            <a href="sanphamnho.html" class="ho"><img src="anh/camcm1.png" style="max-width: 100%;"></a>
                            <div class="card-boby cardh">
                                <a href="sanphamnho.php">
                                    <h6 class="card-title d1">Cám Chào Mào Đỉnh 300gr</h6>
                                </a>
                                <p class="text-uppercase d1">35,000 ₫</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="card rounded-0 border-white shadow" style="max-width: 16 rem;">
                            <a href="#" class="ho"><img src="anh/camcm2.png" style="max-width: 100%;"></a>
                            <div class="card-boby cardh">
                                <a href="#">
                                    <h6 class="card-title d1">Cám Chào Mào Đỉnh 500gr</h6>
                                </a>
                                <p class="text-uppercase d1">50,000 ₫</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="card rounded-0 border-white shadow" style="max-width: 16 rem;">
                            <a href="#" class="ho"><img src="anh/camcm3.png" style="max-width: 100%;"></a>
                            <div class="card-boby cardh">
                                <a href="#">
                                    <h6 class="card-title d1">Cám Chào Mào TOPTEN - Số 1 (Dưỡng)</h6>
                                </a>
                                <p class="text-uppercase d1">90,000 ₫</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="card rounded-0 border-white shadow" style="max-width: 16 rem;">
                            <a href="#" class="ho"><img src="anh/camcm4.png" style="max-width: 100%;"></a>
                            <div class="card-boby cardh">
                                <a href="#">
                                    <h6 class="card-title d1">Cám Chào Mào TOPTEN - Số 1 (Đấu)</h6>
                                </a>
                                <p class="text-uppercase d1">100,000 ₫</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 text-center text-secondary">
                            <a href="#">Xem Thêm <i class="fas fa-angle-down"></i></a>
                        </div>
                    </div>

                    <!-- sp cá -->

                    <div class="container menu" id="sanphammoi">
                        <div class="h4 pb-2 mb-4  border-bottom border-dark">
                            SẢN PHẨM THỰC PHẨM DÀNH CHO CÁ
                        </div>
                        <div class="row menu">
                            <div class="col-sm-3">
                                <div class="card rounded-0 border-white shadow" style="max-width: 16 rem;">
                                    <a href="sanphamnho.html" class="ho"><img src="anh/camca1.png" style="max-width: 100%;"></a>
                                    <div class="card-boby cardh">
                                        <a href="sanphamnho.html">
                                            <h6 class="card-title d1">Cám Cá Hạt Mãnh- Túi 100gr Bifood</h6>
                                        </a>
                                        <p class="text-uppercase d1">15,000 ₫</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="card rounded-0 border-white shadow" style="max-width: 16 rem;">
                                    <a href="#" class="ho"><img src="anh/camca2.png" style="max-width: 100%;"></a>
                                    <div class="card-boby cardh">
                                        <a href="#">
                                            <h6 class="card-title d1">Cám Cá Cảnh Hạt Xanh Đỏ 1li- Túi 100gr</h6>
                                        </a>
                                        <p class="text-uppercase d1">15,000 ₫</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="card rounded-0 border-white shadow" style="max-width: 16 rem;">
                                    <a href="#" class="ho"><img src="anh/camca3.png" style="max-width: 100%;"></a>
                                    <div class="card-boby cardh">
                                        <a href="#">
                                            <h6 class="card-title d1">Cám Cá Cảnh Hạt 4li- Túi 500gr- Bifood</h6>
                                        </a>
                                        <p class="text-uppercase d1">25,000 ₫</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="card rounded-0 border-white shadow" style="max-width: 16 rem;">
                                    <a href="#" class="ho"><img src="anh/camca4.png" style="max-width: 100%;"></a>
                                    <div class="card-boby cardh">
                                        <a href="#">
                                            <h6 class="card-title d1">Cám Cá Cảnh Hạt Xanh Đỏ 1li- túi 200gr</h6>
                                        </a>
                                        <p class="text-uppercase d1">22,000 ₫</p>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12 text-center text-secondary">
                                    <a href="#">Xem Thêm <i class="fas fa-angle-down"></i></a>
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
                                            <a href="#" class="fs-6">
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
                                            <a href="#" class="fs-6"><strong>Địa chỉ:</strong>
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