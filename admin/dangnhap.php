<?php
    session_start();
    ob_start();

    include "user.php";
    include "connect.php";

    if ((isset($_POST['login']))&&($_POST['login'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
        $role = checkuser($username, $password);
        $_SESSION['role']= $role;
        if($role==0){header('location: trangchu.php');
        }if($role==1)
        header('location: dashboard.php');
                  else{
          $txt_er='Wrong Username or Password, Please try again';};
          
        
      }
    
?>
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
        <?php include "header.php" ?>
        <!-- dangnhap -->
        <div class="container">
            <h1 class="label">User login</h1>
            <form class="login_form" action = " <?php echo $_SERVER['PHP_SELF'] ?> " method="POST" >
                <div class="font">Email or Phone</div>
                <input  type="text" name="username">
                <div id="email_error">please fill up your Email or Phone</div>
                <div class="font font2">Password</div>
                <input type="password" name="password">
                <div id="password_error">please fill Password</div>
                <input type="submit" name="login" value="submit">
                <!-- <button type="submit" class="btn">Login</button> -->
                

            </form>
        </div>
        <!-- <script src="valid.js"></script> -->

        <!-- footer -->
        <?php include "footer.php" ?>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>


</body>

</html>