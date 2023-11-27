<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="styles/citem.css">
</head>
<body>
    <?php
        session_start();
        require('components/header.php')
    ?>
    <div class="main-content">
        <?php 
        require('scripts/php/connect.php');
        ?>
    <h2>Наши товары:</h2>
        <div class="product-contain">            
            <?php 
                require('scripts/php/connect.php');    
                $sql2 = 'SELECT * from products order by rand() limit 5';
                $result = $conn->query($sql2);
        
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
                    <form action="" method="post" >
                        <input type="submit" value="Купить" class="item-btn">
                    </form>
                    
                </div>';
                }
            ?>
        </div>
        <h2>Наши отзывы:</h2>
        <div class="reviews-contain">
            <?php 
            $sql3 = 'SELECT * from reviews order by rand() limit 5';
            $result2 = $conn->query($sql3);
            while ($row2 = $result2->fetch_assoc()) {
                echo '<div class="review-item">';
                echo '<div class="autor">';
                echo '<b>'.$row2['autor'].'</b>';
                echo '</div>';
                echo '<div class="descript">';
                echo $row2['descript'];
                echo '</div>';
                echo '</div>';
            }
            ?>
        </div>
    </div>
    </div>

    <?php
        require('components/footer.php')
    ?>
</body>
</html>