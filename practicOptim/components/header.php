<?php session_start();


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles/header.css">
</head>
<body>
    <header>
    <div class="logo">
        <img src="./images/logo.svg" alt="logo" >
    </div>
    <div class="nav-menu">
        <a href="index.php">Главная</a>
        <a href="catalog.php">Каталог</a>
        <?php 
        
        if(isset($_SESSION['phoneNumber'])) {
            echo '<a href="profile.php">Профиль</a>';
        } else {
            echo '<a href="auth.php">Вход</a>';
        }        
        ?>
        <?php 
        
        if(isset($_SESSION['isAdmin'])) {
            if($_SESSION['isAdmin'] == true) {
                echo '<a href="panel.php">Панель</a>';
            }
        } else {
            echo '<a></a>';
        }
        
        ?>
    </div>
    </header>
</body>
</html>