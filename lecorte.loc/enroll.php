<?php
require ('../lecorte.loc/config/connect.php');

$uname = $_POST['username'];
$number = $_POST['contact-number'];
$address = $_POST['addresses'];

$connect = mysqli_query($connect, query: "INSERT INTO `degustation` (`id`, `name`, `contact_number`, `address`) VALUES (NULL, '$uname','$number','$address')");

header("Location: /index.php");
exit;