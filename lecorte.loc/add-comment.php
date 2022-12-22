<?php

require_once('../lecorte.loc/config/connect.php');

$username = $_POST['input-username'];
$text = $_POST['input-comment-text'];
$product_id = $_POST['post-product-id'];

mysqli_query($connect, query: "INSERT INTO `comments`(`username`, `comment_text`, `product_id`) VALUES ('$username','$text','$product_id')");

header("Location: /product-page.php?id=$product_id");
exit;

