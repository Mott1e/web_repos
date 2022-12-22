<?php

require_once('../lecorte.loc/config/connect.php');

$product_id = $_GET['id'];
$product = mysqli_query($connect, query: "SELECT * FROM `product` WHERE `id` = '$product_id'");
$product = mysqli_fetch_assoc($product);
?>

<?php
$comments = mysqli_query($connect, query: "SELECT * FROM `comments` WHERE `product_id` = '$product_id'");
$comments = mysqli_fetch_all($comments);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/product-page.css">
    <title>LE-CORTE | <?= $product['title']; ?></title>
    <script src="./js/jQuery.js"></script>
</head>

<body>
    <header class="header" id="header">
        <a class="back" href="index.php">Главная</a>
        <div class="logo-name">LE-CORTE<sup>®</sup></div>
    </header>

    <main>
        <div class="container">
            <div class="product-card">
                <div class="product-image"><img src="<?= $product['image_link']; ?>" alt="" width="400px" height="600px"></div>

                <div class="product-info">
                    <p class="product-title"><?= $product['title']; ?></p>
                    <p class="product-description"><?= $product['description']; ?></p>
                    <p class="product-price"><?= $product['price']; ?>р</p>
                    <button class="buy">Shop now</button>
                </div>
            </div>

            <div class="characteristics">
                <p class="char-title">Характеристики</p>
                <p class="char-description"><?= $product['description']; ?></p>
            </div>

            <section class="comments-section">

                <form action="./add-comment.php?" class="add-comment" id="add-comment" method="POST">
                    <input type="text" name="input-username" id="input-username" class="input-username" placeholder="Ваше имя">
                    <textarea name="input-comment-text" id="input-comment-text" class="input-comment-text" cols="70" rows="10" placeholder="Ваша рецензия"></textarea>
                    <input type="hidden" id="post-product-id" name='post-product-id' value="<?= $product_id ?>">
                    <button type="submit" class="add-comment-button">Опубликовать</button>
                </form>

                <h2 class="reviews">Рецензии:</h2>

                <ul class="comments-list">
                    <?php foreach ($comments as $comment) {
                    ?>
                        <li class="comment">
                            <p class="nickname"><?= $comment[1] ?></p>
                            <p class="text"><?= $comment[2] ?></p>
                        </li>
                    <?php
                    }
                    ?>
                </ul>
            </section>

        </div>
    </main>

</body>

</html>