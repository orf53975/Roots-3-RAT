<?php
include 'maincss.html';
include 'items.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST')
{
	if (isset($_POST['product1']))
	{
		setcookie($cartproduct5, $cartproduct5);
	}

	if (isset($_POST['product2']))
	{
		setcookie($cartproduct6, $cartproduct6);
	}

	if (isset($_POST['product3']))
	{
		setcookie($cartproduct7, $cartproduct7);
	}

	if (isset($_POST['product4']))
	{
		setcookie($cartproduct8, $cartproduct8);
	}
}
?>
<div class = "banner1">
    <li><a class = "button3" href = "shop.php">home</a></li>
    <li><a class = "button3" href = "cart.php">cart</a></li>
    <li><a class = "button3" href = "about.php">donate</a></li>
    <li><a class = "button3" href = "reviews.php">reviews</a></li>
</div>
<h1>mugs</h1>
<?php include 'back.html'; ?>
<form action="" method="post">
<h1>
<button class="button5">
	<h2><?php echo $product5; ?></h2>
	<img class="image1" align="middle" src="<?php echo $image5; ?>">
	<h3><?php echo $p5size; ?></h3>
	<h3><?php echo $p5dim; ?></h3>
	<h2><?php echo $cartproduct5value . ' usd'; ?></h2>
	<h2><input name = "product1" class = "button1" type = "submit" value = "<?php echo $buy; ?>"></input></h2>
</button>
<button class="button5">
	<h2><?php echo $product6; ?></h2>
	<img class="image1" align="middle" src="<?php echo $image6; ?>">
	<h3><?php echo $p6size; ?></h3>
	<h3><?php echo $p6dim; ?></h3>
	<h2><?php echo $cartproduct6value . ' usd'; ?></h2>
	<h2><input name = "product2" class = "button1" type = "submit" value = "<?php echo $buy; ?>"></input></h2>
</button>
</h1>
<h1>
<button class="button5">
	<h2><?php echo $product7; ?></h2>
	<img class="image1" align="middle" src="<?php echo $image7; ?>">
	<h3><?php echo $p7size; ?></h3>
	<h3><?php echo $p7dim; ?></h3>
	<h2><?php echo $cartproduct7value . ' usd'; ?></h2>
	<h2><input name = "product3" class = "button1" type = "submit" value = "<?php echo $buy; ?>"></input></h2>
</button>
<button class="button5">
	<h2><?php echo $product8; ?></h2>
	<img class="image1" align="middle" src="<?php echo $image8; ?>">
	<h3><?php echo $p8size; ?></h3>
	<h3><?php echo $p8dim; ?></h3>
	<h2><?php echo $cartproduct8value . ' usd'; ?></h2>
	<h2><input name = "product4" class = "button1" type = "submit" value = "<?php echo $buy; ?>"></input></h2>
</button>
</h1>
</form>