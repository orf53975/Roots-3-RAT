<?php
include 'maincss.html';
include 'items.php';

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
?>
<body>
    <div class = "banner1">
        <li><a class = "button3" href = "shop.php">products</a></li>
        <li><a class = "button3" href = "cart.php">cart</a></li>
        <li><a class = "button3" href = "about.php">donate</a></li>
        <li><a class = "button3" href = "post.php">leave feedback</a></li>
    </div>
</body>
<h1>mugs</h1>
<?php include 'back.html'; ?>
<form action="" method="post">
<h1>
<button class="button5">
	<h2><?php echo $product1; ?></h2>
	<img class="image1" align="middle" src="<?php echo $image1; ?>">
	<h3><?php echo $p1oz; ?></h3>
	<h3><?php echo $p1size; ?></h3>
	<h2><?php echo $cartproduct1value . ' usd'; ?></h2>
	<h2><input name = "product1" class = "button1" type = "submit" value = "<?php echo $buy; ?>"></input></h2>
</button>
<button class="button5">
	<h2><?php echo $product2; ?></h2>
	<img class="image1" align="middle" src="<?php echo $image2; ?>">
	<h3><?php echo $p2oz; ?></h3>
	<h3><?php echo $p2size; ?></h3>
	<h2><?php echo $cartproduct2value . ' usd'; ?></h2>
	<h2><input name = "product2" class = "button1" type = "submit" value = "<?php echo $buy; ?>"></input></h2>
</button>
</h1>
<h1>
<button class="button5">
	<h2><?php echo $product3; ?></h2>
	<img class="image1" align="middle" src="<?php echo $image3; ?>">
	<h3><?php echo $p3oz; ?></h3>
	<h3><?php echo $p3size; ?></h3>
	<h2><?php echo $cartproduct3value . ' usd'; ?></h2>
	<h2><input name = "product3" class = "button1" type = "submit" value = "<?php echo $buy; ?>"></input></h2>
</button>
<button class="button5">
	<h2><?php echo $product4; ?></h2>
	<img class="image1" align="middle" src="<?php echo $image4; ?>">
	<h3><?php echo $p4oz; ?></h3>
	<h3><?php echo $p4size; ?></h3>
	<h2><?php echo $cartproduct4value . ' usd'; ?></h2>
	<h2><input name = "product4" class = "button1" type = "submit" value = "<?php echo $buy; ?>"></input></h2>
</button>
</h1>
</form>
<?php include 'bottombar.html'; ?>