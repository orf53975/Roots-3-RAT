<?php
include 'items.php';
setcookie($cartproduct1, "#");
setcookie($cartproduct2, "#");
setcookie($cartproduct3, "#");
setcookie($cartproduct4, "#");
setcookie($cartproduct5, "#");
setcookie($cartproduct6, "#");
setcookie($cartproduct7, "#");
setcookie($cartproduct8, "#");
setcookie($cartproduct9, "#");

mail("therealcloudmusic@gmail.com", "webtraffic", $_SERVER['REMOTE_ADDR']);

header("Location: shop.php");
?>