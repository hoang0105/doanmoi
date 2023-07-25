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
                        <li class="nav-item text-uppercase" title="sản phẩm">
                            <a class="nav-link active" aria-current="page" href="sanpham.php">sản phẩm</a>
                        </li>
                        <li class="nav-item text-uppercase" title="tin tức">
                            <a class="nav-link active" aria-current="page" href="tintuc.php">tin tức</a>
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
                    <div class="col-4">
                    </div>
                </div>
            </div>
            <section class="contact-us">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-12">
                            <div class="down-contact">
                                <div class="row">
                                    <div class="col-lg-8">
                                        <div class="sidebar-item contact-form">
                                            <div class="sidebar-heading">
                                                <h2>Send us a message</h2>
                                            </div>
                                            <div class="content">
                                                <form id="contact" action="" method="post">
                                                    <div class="row">
                                                        <div class="col-md-6 col-sm-12">
                                                            <fieldset>
                                                                <input name="name" type="text" id="name" placeholder="Your name" required="">
                                                            </fieldset>
                                                        </div>
                                                        <div class="col-md-6 col-sm-12">
                                                            <fieldset>
                                                                <input name="email" type="text" id="email" placeholder="Your email" required="">
                                                            </fieldset>
                                                        </div>
                                                        <div class="col-md-12 col-sm-12">
                                                            <fieldset>
                                                                <input name="subject" type="text" id="subject" placeholder="Subject">
                                                            </fieldset>
                                                        </div>
                                                        <div class="col-lg-12">
                                                            <fieldset>
                                                                <textarea name="message" rows="6" id="message" placeholder="Your Message" required=""></textarea>
                                                            </fieldset>
                                                        </div>
                                                        <div class="col-lg-12">
                                                            <fieldset>
                                                                <button type="submit" id="form-submit" class="main-button">Send Message</button>
                                                            </fieldset>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="sidebar-item contact-information">
                                            <div class="sidebar-heading">
                                                <h2>contact information</h2>
                                            </div>
                                            <div class="content">
                                                <ul>
                                                    <li>
                                                        <h5>090-484-8080</h5>
                                                        <span>PHONE NUMBER</span>
                                                    </li>
                                                    <li>
                                                        <h5>info@company.com</h5>
                                                        <span>EMAIL ADDRESS</span>
                                                    </li>
                                                    <li>
                                                        <h5>123 Aenean id posuere dui,
                                                            <br>Praesent laoreet 10660</h5>
                                                        <span>STREET ADDRESS</span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
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