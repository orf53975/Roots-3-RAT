<?php
include 'maincss.html';
include 'items.php';

$items = '';
$total = 0;

if (isset($_POST['clear'])) {
	setcookie($cartproduct1, "#");
	setcookie($cartproduct2, "#");
	setcookie($cartproduct3, "#");
	setcookie($cartproduct4, "#");
	setcookie($cartproduct5, "#");
	setcookie($cartproduct6, "#");
	setcookie($cartproduct7, "#");
	setcookie($cartproduct8, "#");
	setcookie($cartproduct9, "#");
	header("Location: " . $_SERVER['PHP_SELF']);
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
<h1>cart</h1>
<?php
$secounditem = 0;

if ($_COOKIE[$cartproduct1] !== "#")
{
	echo '<a href="" class="button4"><h2>' . $product1;
	echo '</h2><img class="image1" align="middle" src="' . $image1 . '">';
	echo '<h2>' . $cartproduct1value . ' usd' . '</h2></button></a>';

	$visualtotal = $visualtotal + $cartproduct1value;
	$items = $items . $product1 . '  ';

	$secounditem = $secounditem + 1;
	if ($secounditem == 2)
	{
		$secounditem = 0;
		echo '<br>';
	}
}
else
{
	$noitems = $noitems + 1;
}

if ($_COOKIE[$cartproduct2] !== "#")
{
	echo '<a href="" class="button4"><h2>' . $product1;
	echo '</h2><img class="image1" align="middle" src="' . $image2 . '">';
	echo '<h2>' . $cartproduct2value . ' usd' . '</h2></button></a>';

	$visualtotal = $visualtotal + $cartproduct2value;
	$items = $items . $product2 . '  ';

	$secounditem = $secounditem + 1;
	if ($secounditem == 2)
	{
		$secounditem = 0;
		echo '<br>';
	}
}
else
{
	$noitems = $noitems + 1;
}

if ($_COOKIE[$cartproduct3] !== "#")
{
	echo '<a href="" class="button4"><h2>' . $product3;
	echo '</h2><img class="image1" align="middle" src="' . $image3 . '">';
	echo '<h2>' . $cartproduct3value . ' usd' . '</h2></button></a>';

	$visualtotal = $visualtotal + $cartproduct3value;
	$items = $items . $product3 . '  ';

	$secounditem = $secounditem + 1;
	if ($secounditem == 2)
	{
		$secounditem = 0;
		echo '<br>';
	}
}
else
{
	$noitems = $noitems + 1;
}

if ($_COOKIE[$cartproduct4] !== "#")
{
	echo '<a href="" class="button4"><h2>' . $product4;
	echo '</h2><img class="image1" align="middle" src="' . $image4 . '">';
	echo '<h2>' . $cartproduct4value . ' usd' . '</h2></button></a>';

	$visualtotal = $visualtotal + $cartproduct4value;
	$items = $items . $product4 . '  ';

	$secounditem = $secounditem + 1;
	if ($secounditem == 2)
	{
		$secounditem = 0;
		echo '<br>';
	}
}
else
{
	$noitems = $noitems + 1;
}

if ($_COOKIE[$cartproduct5] !== "#")
{
	echo '<a href="" class="button4"><h2>' . $product5;
	echo '</h2><img class="image1" align="middle" src="' . $image5 . '">';
	echo '<h2>' . $cartproduct5value . ' usd' . '</h2></button></a>';

	$visualtotal = $visualtotal + $cartproduct5value;
	$items = $items . $product5 . '  ';

	$secounditem = $secounditem + 1;
	if ($secounditem == 2)
	{
		$secounditem = 0;
		echo '<br>';
	}
}
else
{
	$noitems = $noitems + 1;
}

if ($_COOKIE[$cartproduct6] !== "#")
{
	echo '<a href="" class="button4"><h2>' . $product6;
	echo '</h2><img class="image1" align="middle" src="' . $image6 . '">';
	echo '<h2>' . $cartproduct6value . ' usd' . '</h2></button></a>';

	$visualtotal = $visualtotal + $cartproduct6value;
	$items = $items . $product6 . '  ';

	$secounditem = $secounditem + 1;
	if ($secounditem == 2)
	{
		$secounditem = 0;
		echo '<br>';
	}
}
else
{
	$noitems = $noitems + 1;
}

if ($_COOKIE[$cartproduct7] !== "#")
{
	echo '<a href="" class="button4"><h2>' . $product7;
	echo '</h2><img class="image1" align="middle" src="' . $image7 . '">';
	echo '<h2>' . $cartproduct7value . ' usd' . '</h2></button></a>';

	$visualtotal = $visualtotal + $cartproduct7value;
	$items = $items . $product7 . '  ';

	$secounditem = $secounditem + 1;
	if ($secounditem == 2)
	{
		$secounditem = 0;
		echo '<br>';
	}
}
else
{
	$noitems = $noitems + 1;
}

if ($_COOKIE[$cartproduct8] !== "#")
{
	echo '<a href="" class="button4"><h2>' . $product8;
	echo '</h2><img class="image1" align="middle" src="' . $image8 . '">';
	echo '<h2>' . $cartproduct8value . ' usd' . '</h2></button></a>';

	$visualtotal = $visualtotal + $cartproduct8value;
	$items = $items . $product8 . '  ';

	$secounditem = $secounditem + 1;
	if ($secounditem == 2)
	{
		$secounditem = 0;
		echo '<br>';
	}
}
else
{
	$noitems = $noitems + 1;
}

if ($_COOKIE[$cartproduct9] !== "#")
{
	echo '<a href="" class="button4"><h2>' . $product9;
	echo '</h2><img class="image1" align="middle" src="' . $image9 . '">';
	echo '<h2>' . $cartproduct9value . ' usd' . '</h2></button></a>';

	$visualtotal = $visualtotal + $cartproduct9value;
	$items = $items . $product9 . '  ';

	$secounditem = $secounditem + 1;
	if ($secounditem == 2)
	{
		$secounditem = 0;
		echo '<br>';
	}
}
else
{
	$noitems = $noitems + 1;
}

//split

if ($noitems == 9)
{
	echo "<h2>no items have been moved to the cart</h2>";
}

if ($visualtotal !== 0)
{
	echo '<h1>total ' . $visualtotal . ' usd</h1>';
}
?>
</h3>
<form action = "" method = "POST">
<input name = "clear" class = "button3" type = "submit" value = "clear cart"></input>
<?php
$items = '';

if (isset($_POST['checkout']))
{
	if ($visualtotal !== 0)
	{
		echo '<h2>country</h2><input class = "input1" type = "text" name = "country"></input>';
		echo '<h2>state / region</h2><input class = "input1" type = "text" name = "region"></input>';
		echo '<h2>city</h2><input class = "input1" type = "text" name = "city"></input>';
		echo '<h2>address</h2><input class = "input1" type = "text" name = "address"></input>';
		echo '<h2>email</h2><input class = "input1" type = "text" name = "email"></input>';
		echo '<h2>note (optional)</h2><input class = "input1" type = "text" name = "note"></input>';
		echo '<h4><input name="checkout2" class = "button3" type = "submit" value = "buy items"></input></h4>';
	}
	else
	{
		echo '<input name = "checkout" class = "button3" type = "submit" value = "checkout"></input>';
	}
}
else
{
	echo '<input name = "checkout" class = "button3" type = "submit" value = "checkout"></input>';
}

if (isset($_POST['checkout2']))
{
	$email = ($_POST['email']);
	$region = ($_POST['region']);
	$country = ($_POST['country']);
	$note = ($_POST['note']);
	$address = ($_POST['address']);
	$city = ($_POST['city']);

	$link = 'https://www.paypal.com/cgi-bin/webscr?business=therealcloudmusic@gmail.com&cmd=_xclick&currency_code=USD&amount=*TOTAL*&item_name=';
	$products = '';

	if ($_COOKIE[$cartproduct1] !== "#")
	{
		$link = $link . '1x ' . $product1 . '  ';
		$products = $products . $product1 . '  ';
	}

	if ($_COOKIE[$cartproduct2] !== "#")
	{
		$link = $link . '1x ' . $product2 . '  ';
		$products = $products . $product2 . '  ';
	}

	if ($_COOKIE[$cartproduct3] !== "#")
	{
		$link = $link . '1x ' . $product3 . '  ';
		$products = $products . $product3 . '  ';
	}

	if ($_COOKIE[$cartproduct4] !== "#")
	{
		$link = $link . '1x ' . $product4 . '  ';
		$products = $products . $product4 . '  ';
	}

	if ($_COOKIE[$cartproduct5] !== "#")
	{
		$link = $link . '1x ' . $product5 . '  ';
		$products = $products . $product5 . '  ';
	}

	if ($_COOKIE[$cartproduct6] !== "#")
	{
		$link = $link . '1x ' . $product6 . '  ';
		$products = $products . $product6 . '  ';
	}

	if ($_COOKIE[$cartproduct7] !== "#")
	{
		$link = $link . '1x ' . $product7 . '  ';
		$products = $products . $product7 . '  ';
	}

	if ($_COOKIE[$cartproduct8] !== "#")
	{
		$link = $link . '1x ' . $product8 . '  ';
		$products = $products . $product8 . '  ';
	}

	if ($_COOKIE[$cartproduct9] !== "#")
	{
		$link = $link . '1x ' . $product9 . '  ';
		$products = $products . $product9 . '  ';
	}

	$output = "<h3>products: " . $products . "   price: " . $visualtotal . "   price: " . $visualtotal . "   country: " . $country . "   region: " . $region . "   city: " . $city . "   address: " . $address . "   note: " . $note . '</h3>';

	$file = fopen('comments2.html', 'a');
	fwrite($file, $output);
	fclose($file);

	$link = str_replace('*TOTAL*', $visualtotal, $link);
	echo '<h2>Please wait. We are processing your order!</h2>';
	echo '<meta http-equiv="refresh" content="0;url=' . $link . '">';
}
?>
<?php include 'bottombar.html' ?>
</form>