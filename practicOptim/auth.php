<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles/auth.css">
    <link rel="stylesheet" href="styles/style.css">
</head>
<body>
    <?php 
    
        session_start();
        require ('components/header.php');
    ?>
    <div class="main-content">
        <div class="contain-form">
            <form action="scripts/php/authorization.php" method="post" class="login-form" required="true">
                    <input type="text" name="numberPhone" placeholder="Введите номер телефона" required="true" id="phoneLogin">
                    <input type="password" name="password" placeholder="Введите пароль" required="true">
                    <input type="submit" name="logIn">
                    <a href="reg.php">Нет аккаунта? Зарегистрироваться</a>
            </form>
        </div> 
    </div>
    <?php 
        require ('components/footer.php');
    ?>
    <script src='https://code.jquery.com/jquery-3.5.1.min.js'></script>
    <script src='scripts/js/jquery.mask.min.js'></script>
    <script src='scripts/js/main.js'></script>
</body>
</html>