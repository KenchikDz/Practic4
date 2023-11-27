<?php 
header("Content-Type: text/html; charset=utf-8");
require('connect.php');

$phoneNumber = $_POST['numberPhone'];
$passwordLogin = $_POST['password'];
$userData = array();

$sql = "SELECT * FROM client WHERE numberPhone = '$phoneNumber'";
$result = $conn->query($sql);

session_start();
if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    $encryptedPassword = $row['password'];
    $userData[] = $row;
  }
} else {
  echo "0 results";
}


$_SESSION['userData'] = $userData;

if ($passwordLogin === $encryptedPassword) {
    header('Location: ../../../profile.php');
    $_SESSION['phoneNumber'] = $phoneNumber;
    $_SESSION['isAdmin'] = $userData[0]["isAdmin"];
    
} else { 
    header('Location: ../../../auth.php'); 
    $_SESSION['error'] = "Неверный логин или пароль, пожалуйста, попробуйте снова.";
}

?>