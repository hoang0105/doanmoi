<?php
session_start();
// if (!isset($_SESSION['username'])) {
//     // Redirect to the login page
//     header("Location: http://localhost/DO_AN_PHP_MYSQL_2023/login/loginn.php");
//     exit;
// }
include "../connect.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="dashboard.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body>
    <div class="sidebar" style="background: #000;">
        <div class="logo"></div>
        
        <?php  include "sidebar.php";  ?>
       
    </div>
    <div class="main-content">
        <div class="header-wrapper">
            <div class="header-title">
                <span>Primary</span>
                <h2>Danh sách sản phẩm</h2>
            </div>
            <div class="user-info">
                <div class="searh-box">
                    <i class="fa-solid fa-search"></i>
                    <input type="text" placeholder="Search">
                </div>
                <div class="user" onclick="settingsMenuToggle()">
                    <?php
                    if (isset($_SESSION['username'], $_SESSION['user_id'], $_SESSION['anh_1'])) {
                        $anh = $_SESSION['anh_1'];
                        ?>
                        <img style=" border-radius: 50px;" src="data:image/jpeg;base64,<?php echo base64_encode($anh); ?>"
                            alt="">
                    <?php }
                    ?>
                </div>
            </div>
            <div class="settings-menu">
                <div id="dark-btn">
                    <span></span>
                </div>
                <div class="settings-menu-inner">
                    <div class="user-profile">
                        <img src="img/s10.jfif" alt="">
                        <?php
                        if (isset($_SESSION['username']) && isset($_SESSION['user_id'])) {
                            echo '<input type="text" value="' . $_SESSION['user_id'] . '">';
                        }
                        ?>
                    </div>
                    <hr>
                    <div class="settings-links">
                        <form action="../login/logout.php" method="POST">
                            <div class="fas fa-sign-out-alt"></div>
                            <span><input type="submit" value="Logout"></span>
                        </form>
                    </div>
                    <hr>
                    <!-- <div class="settings-links">
                        <i class='bx bx-moon icon'></i>
                        <a href="#">Sáng & Tối<i class='bx bxs-chevron-right'></i></a>
                    </div>
                    <hr>
                    <div class="settings-links">
                        <i class='bx bx-log-in icon'></i>
                        <a href="dangnhap1.html">Sign Out <i class='bx bxs-chevron-right'></i></a>
                    </div> -->
                </div>
            </div>
        </div>
        <style>
            .settings-menu {
                position: absolute;
                width: 90%;
                max-width: 330px;
                background: var(--white);
                box-shadow: 0 0 10px rgb(0, 0, 0, 0.4);
                border-radius: 4px;
                overflow: hidden;
                top: 61px;
                right: 1.7%;
                max-height: 0;
                transition: max-height 0.5s;
                z-index: 1000;
            }

            .settings-menu-height {
                max-height: 450px;
            }

            #dark-btn {
                position: absolute;
                top: 20px;
                right: 20px;
                background: #ccc;
                width: 45px;
                border-radius: 15px;
                padding: 2px 3px;
                cursor: pointer;
                display: flex;
                transition: padding-left 0.5s, background 0.5s;
            }

            #dark-btn span {
                width: 18px;
                height: 18px;
                background: #fff;
                border-radius: 50%;
                display: inline-block;
            }

            #dark-btn.dark-btn-on {
                padding-left: 23px;
                background: #000;
            }

            .settings-menu-inner {
                padding: 20px;
            }
        </style>
        <br>
        <div class="container">
            <?php
            include "list_sanpham.php";
            ?>

        </div>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
        crossorigin="anonymous"></script>
    <!-- <script src="https://code.jquery.com/jquery-3.6.0.js"></script> -->
    <script>
        var settingMenu = document.querySelector('.settings-menu');
        var darkBtn = document.getElementById("dark-btn");

        function settingsMenuToggle() {
            settingMenu.classList.toggle("settings-menu-height");
        }
        darkBtn.onclick = function () {
            darkBtn.classList.toggle("dark-btn-on");
            document.body.classList.toggle("dark-theme");

            if (localStorage.getItem("theme") == "light") {
                localStorage.setItem("theme", "dark");
            } else {
                localStorage.setItem("theme", "light");
            }
        }
        if (localStorage.getItem("theme") == "light") {
            darkBtn.classList.remove("dark-btn-on");
            document.body.classList.remove("dark-theme");
        } else if (localStorage.getItem("theme") == "dark") {
            darkBtn.classList.add("dark-btn-on");
            document.body.classList.add("dark-theme");
        } else {
            localStorage.setItem("theme", "light");
        }
    </script>
</body>

</html>