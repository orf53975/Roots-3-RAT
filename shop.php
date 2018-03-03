<?php
include 'maincss.html';
include 'topbar.php';
include 'items.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST')
{
	if (isset($_POST['product1']))
	{
		setcookie($cartproduct1, $cartproduct1);
	}

	if (isset($_POST['product2']))
	{
		setcookie($cartproduct2, $cartproduct2);
	}

	if (isset($_POST['product3']))
	{
		setcookie($cartproduct3, $cartproduct3);
	}

	if (isset($_POST['product4']))
	{
		setcookie($cartproduct4, $cartproduct4);
	}
}
?>
<!DOCTYPE HTML>
<h1>categories</h1>
<?php include 'productstopbar.php'; ?>
<style>
.image2 {
	width: 180px;
	height: 180px;
}
</style>