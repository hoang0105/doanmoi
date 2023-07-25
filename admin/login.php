<!DOCTYPE html>
<html lang="en">

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
    <link rel="stylesheet" href="style.css">
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
                        <i class="fas fa-cart-plus fs-5"></i>
                    </a>
                </div>
            </div>
        </nav>
        <!-- dangnhap -->
        <div class="container">
            <h1 class="label">User login</h1>
            <form class="login_form" action="trangchu.php" method="post" name="form" onsubmit="return validated()">
                <div class="font">Email or Phone</div>
                <input autocomplete="off" type="text" name="email">
                <div id="email_error">please fill up your Email or Phone</div>
                <div class="font font2">Password</div>
                <input type="password" name="password">
                <div id="password_error">please fill Password</div>
                <button class="submit">Login</button>

            </form>
        </div>
        <script src="valid.js"></script>

        <!-- footer -->
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