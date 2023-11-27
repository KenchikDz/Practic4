<?php 
header("Content-Type: text/html; charset=utf-8");
require('connect.php');
session_start();

$name = $_POST['productName'];
$price = $_POST['productPrice'];
$image = $_POST['productImage'];
$article = $_SESSION['article'];

$sql = "UPDATE products SET
name = '$name', 
price = '$price',  
image = '$image'
WHERE article = $article" ;

if ($conn->query($sql) === TRUE) {
    header("Location: ../../../edited.php");
    exit;
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
} 

?>