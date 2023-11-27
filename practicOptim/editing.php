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
    header("Content-Type: text/html; charset=utf-8");
        require('scripts/php/connect.php');
        session_start();
        $article = $_POST['productArticleToEdit'];
        $_SESSION['article'] = $article;
        $sql = "SELECT * FROM products WHERE article = $article";
        $result = $conn->query($sql);
        $product = mysqli_fetch_assoc($result);
        require ('components/header.php');
    ?>
    <div class="main-content">
        <div class="contain-form">
            <form action="scripts/php/edit.php" method="post" class="edit-form" required="true">
                    <input type="text" name="productName" value="<?= $product['name'] ?>">
                    <input type="file" id="avatar" name="productImage" accept="image/png, image/jpeg"/>
                    <input type="number" name="productPrice" value="<?= $product['price']?>">
                    <input type="submit">
            </form>
        </div> 
    </div>
    <?php 
        require ('components/footer.php');
    ?>
</body>
</html>