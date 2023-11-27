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
        header("Content-Type: text/html; charset=utf-8");
        require ('scripts/php/connect.php');
        session_start();
        require ('components/header.php');
        $sql = "SELECT * FROM products";
        $result = $conn->query($sql);
        
    ?>
    <div class="main-content panel">
        <div class="panels">

            <div class="panel__to-adding">
                <form action="scripts/php/add.php" name="addPanel" method="POST">
                    <input type="text" name="productName" placeholder="Введите название товара" required>
                    <input type="number" name="productPrice" placeholder="Введите цену товара" required> 
                    <input type="file" name="productImage" placeholder="Выберите изображение" required>
                    <input type="number" name="productArticle" placeholder="Выберите артикль из двух цифр" min="10" max="99" required>
                    <input type="submit">
                </form>
            </div>

            <div class="panel__to-editing">
                <form action="editing.php" name="editPanel" method="POST">
                    <select name="productArticleToEdit" required>
                        <option value=""> Выберите артикль товара </option>
                        <?php 
                        if ($result->num_rows > 0) {
                            while($row = $result->fetch_assoc()) {
                              echo '<option value="'.$row['article'].'">'.$row['article'].'</option>';
                            }
                          } else {
                            echo "0 results";
                          }
                        ?>

                       
                    </select>
                    <input type="submit" value="Редактировать выбранный товар">
                </form>
            </div>

            <div class="panel__to-deleting">
                <form action="scripts/php/delete.php" method="POST" name="delete">
                <select name="productArticleToDelete" required>
                        <option value=""> Выберите артикль товара </option>
                        <?php 
                        $sql2 = "SELECT * FROM products";
                        $result2 = $conn->query($sql2);
                        if ($result2->num_rows > 0) {
                            while($row2 = $result2->fetch_assoc()) {
                              echo '<option value="'.$row2['article'].'">'.$row2['article'].'</option>';
                            }
                          } else {
                            echo "0 results";
                          }
                        ?>
                    </select>
                    <input type="submit" value="Удалить выбранный товар">
                </form>
            </div>

        </div>
    </div>
    <?php 
        require ('components/footer.php');
    ?>
</body>
</html>