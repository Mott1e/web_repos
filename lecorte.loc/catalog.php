<?php

require_once("../lecorte.loc/config/connect.php");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/catalog.css">
    <title>LE CORTE | Catalog</title>
</head>

<body>
    <header class="header" id="header">
        <a class="back" href="index.php">Главная</a>
        <div class="logo-name">LE-CORTE<sup>®</sup></div>
    </header>

    <main>
        <div class="container">
            <section class="info-block">
                <p class="header-text">Винная карта</p>
                <p class="text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio repellendus earum eum
                    totam, quae, sit et veritatis commodi odit cumque dolor, incidunt impedit assumenda est consectetur
                    minus. Odio, dolorem incidunt.</p>

                <p class="text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio repellendus earum eum
                    totam, quae, sit et veritatis commodi odit cumque dolor, incidunt impedit assumenda est consectetur
                    minus. Odio, dolorem incidunt.</p>
            </section>
            <div class="horizontal-line"></div>


            <section class="collection-block">

                <?php
                $products = mysqli_query($connect, "SELECT * FROM `product`");
                $products = mysqli_fetch_all($products);

                foreach ($products as $product) {
                ?>

                    <div class="product-card">
                        <div>
                            <p class="product-title"><a href="product-page.php?id=<?= $product[0]; ?>" class="product-refer"><?= $product[1]; ?></a></p>
                            <p class="product-info"><?= $product[2]; ?></p>
                        </div>
                        <p class="price"><b><?= $product[3]; ?></b>p</p>
                    </div>

                <?php
                }
                ?>

            </section>
        </div>
    </main>
    <footer>
        <p class="copyright">© LE-CORTE</p>
    </footer>

</body>

</html>