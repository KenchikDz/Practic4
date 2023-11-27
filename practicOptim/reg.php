<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles/reg.css">
    <link rel="stylesheet" href="styles/style.css">

</head>
<body>
    <?php 
        session_start();
        require ('components/header.php');
    ?>
    <div class="main-content">
        <div class="form-contain">
            <form action="scripts/php/registration.php" method="post" class="registration-form">
                <input type="text" name="Name" placeholder="Введите имя" required="true">    
                <input type="text" name="SecondName" placeholder="Введите фамилию" required="true">   
                <input type="text" name="LastName" placeholder="Введите ваше отчество" required="true">   
                <input type="text" name="PhoneNumber" placeholder="Введите номер телефона" required="true" id="PhoneReg">   
                <input type="password" name="passwordUser" placeholder="Введите пароль" required="true">
                <input type="submit" name="sendUserData" value="Зарегистрироваться">   
                <a href="auth.php">Есть аккаунт? Войти</a>
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