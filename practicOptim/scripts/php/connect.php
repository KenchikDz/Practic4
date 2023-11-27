<?php 
header("Content-Type: text/html; charset=utf-8");
$username = "root";
$database = "allforHome";
$password = "";
$servername = "practicOptim";


$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  } 
?>