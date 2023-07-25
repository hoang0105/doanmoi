<?php
// function connectdb(){
//     $servername = "localhost";
//     $username = "root";
//     $password = "123456";
//     $db_name = "php2";


//     $pdo = null;
//     try {
//         $pdo = new PDO('mysql:host=localhost;dbname=php2', $username, $password); 
//         $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
//     } 
//     catch (PDOException $e) {
//         echo "Kết nối thất bại: " . $e->getMessage();
//     }

//     return $pdo;

// }

?>
<?php
$local = "localhost";
$user = "root";
$password = "123456";
$db_name = "php2";

$conn = new mysqli($local,$user,$password,$db_name);

if(!isset($conn)){
    echo "error";
} 
?>