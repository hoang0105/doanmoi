<?php

function checkuser($username,$password){
    $conn = connectdb();
    $stmt = $conn->prepare("SELECT * FROM tbl_user WHERE user = '".$username."' AND pass = '".$password."' ");
    $stmt -> execute();
    $result=$stmt->setFetchMode(PDO::FETCH_ASSOC);
    $kq=$stmt->fetchAll();
    if(count($kq)>0)return $kq[0]['role'];
    else return 0;
}
// function dx(){
//     unset($_SESSION['role']);
//     header('location: dangnhap.php');
// }

?>