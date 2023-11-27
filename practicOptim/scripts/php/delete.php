<?php 
header("Content-Type: text/html; charset=utf-8");
require('connect.php');
session_start();
$article = $_POST['productArticleToDelete'];

$sql = "DELETE FROM products WHERE article = $article";

if ($conn->query($sql) === TRUE) {
    header("Location: ../../../deleted.php");
    exit;
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
} 

?>