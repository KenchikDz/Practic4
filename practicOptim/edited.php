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
<div class="main-content edited">
    <h2>Ваш товар успешно отредактирован!</h2>
    <a href="panel.php">Вернуться к панели администратора.</a>
</div>
<?php
        require('components/footer.php')
?>
</body>
</html>