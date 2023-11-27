<?php 
header("Content-Type: text/html; charset=utf-8");
require('connect.php');
session_start();
$name = $_POST['productName'];
$price = $_POST['productPrice'];
$image = $_POST['productImage'];
$article = $_POST['productArticle'];

$sql = "INSERT INTO products (name, price, image, article)
VALUES ('$name', '$price', '$image', '$article')";

try {
    $mysqli = $conn->query($sql);

    if($mysqli === TRUE) {
        header("Location: ../../../added.php");
    }
} catch (Exception $e) {
    $error_code = $conn->errno;

    if ($error_code == 1062) {
        die("Данный артикль уже существует");
    } else {
        echo "Error: " . $e->getMessage();
    }
}
?>