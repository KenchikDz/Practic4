<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="styles/catalog.css">
    <link rel="stylesheet" href="styles/citem.css">
</head>
<body>
<?php
        
        session_start();
        require('components/header.php');
        require('scripts/php/connect.php');
?>
<div class="main-content">
<div class="catalog-contain">
<?php 
    $sql = "SELECT * from products";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo '<div class="item-contain">
            <div class="item-image">
                <img src="images/'.$row['image'].'" alt="img">
            </div>
            <div class="item-data">
                <div class="item-price">
                    <h1>'.$row['name'].'</h1>
                </div>
                <div class="item-name">
                    <h2>'.$row['price'].' Рублей</h2>
                </div>
            </div>
            ';
            if (isset($_SESSION["userData"])) { 
                echo '
                <form action="profile.php" method="post" >
                <input type="submit" value="Купить" class="item-btn">
                </form>';
            } else {
                echo '
                <form action="" method="post" >
                <input type="submit" value="Купить" class="item-btn">
                </form>';
            }
            echo '
        </div>';
        }};
    ?>
</div>

</div>
<?php
        require('components/footer.php')
?>
</body>
</html>