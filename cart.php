<?php
include 'maincss.html';
include 'items.php';

if (isset($_POST['clear'])) {
	setcookie($cartproduct1, "#");
	setcookie($cartproduct2, "#");
	setcookie($cartproduct3, "#");
	setcookie($cartproduct4, "#");
	setcookie($cartproduct5, "#");
	setcookie($cartproduct6, "#");
	setcookie($cartproduct7, "#");
	setcookie($cartproduct8, "#");
	header("Location: " . $_SERVER['PHP_SELF']);
}
?>
<div class = "banner1">
    <li><a class = "button3" href = "shop.php">home</a></li>
    <li><a class = "button3" href = "cart.php">cart</a></li>
    <li><a class = "button3" href = "about.php">donate</a></li>
    <li><a class = "button3" href = "reviews.php">reviews</a></li>
</div>
<h1>cart</h1>
<?php
if ($_COOKIE[$cartproduct1] !== "#")
{
	echo '<h2><a href="" class="button4"><h2>' . $product1;
	echo '</h2><img class="image1" align="middle" src="' . $image1 . '">';
	echo '<h2>' . $cartproduct1value . ' usd' . '</h2></button></a></h2>';

	$visualtotal = $visualtotal + $cartproduct1value;
}
else
{
	$noitems = $noitems + 1;
}

if ($_COOKIE[$cartproduct2] !== "#")
{
	echo '<h2><a href="" class="button4"><h2>' . $product1;
	echo '</h2><img class="image1" align="middle" src="' . $image2 . '">';
	echo '<h2>' . $cartproduct2value . ' usd' . '</h2></button></a></h2>';

	$visualtotal = $visualtotal + $cartproduct2value;
}
else
{
	$noitems = $noitems + 1;
}

if ($_COOKIE[$cartproduct3] !== "#")
{
	echo '<h2><a href="" class="button4"><h2>' . $product3;
	echo '</h2><img class="image1" align="middle" src="' . $image3 . '">';
	echo '<h2>' . $cartproduct3value . ' usd' . '</h2></button></a></h2>';

	$visualtotal = $visualtotal + $cartproduct3value;
}
else
{
	$noitems = $noitems + 1;
}

if ($_COOKIE[$cartproduct4] !== "#")
{
	echo '<h2><a href="" class="button4"><h2>' . $product4;
	echo '</h2><img class="image1" align="middle" src="' . $image4 . '">';
	echo '<h2>' . $cartproduct4value . ' usd' . '</h2></button></a></h2>';

	$visualtotal = $visualtotal + $cartproduct4value;
}
else
{
	$noitems = $noitems + 1;
}

if ($_COOKIE[$cartproduct5] !== "#")
{
	echo '<h2><a href="" class="button4"><h2>' . $product5;
	echo '</h2><img class="image1" align="middle" src="' . $image5 . '">';
	echo '<h2>' . $cartproduct5value . ' usd' . '</h2></button></a></h2>';

	$visualtotal = $visualtotal + $cartproduct5value;
}
else
{
	$noitems = $noitems + 1;
}

if ($_COOKIE[$cartproduct6] !== "#")
{
	echo '<h2><a href="" class="button4"><h2>' . $product6;
	echo '</h2><img class="image1" align="middle" src="' . $image6 . '">';
	echo '<h2>' . $cartproduct6value . ' usd' . '</h2></button></a></h2>';

	$visualtotal = $visualtotal + $cartproduct6value;
}
else
{
	$noitems = $noitems + 1;
}

if ($_COOKIE[$cartproduct7] !== "#")
{
	echo '<h2><a href="" class="button4"><h2>' . $product7;
	echo '</h2><img class="image1" align="middle" src="' . $image7 . '">';
	echo '<h2>' . $cartproduct7value . ' usd' . '</h2></button></a></h2>';

	$visualtotal = $visualtotal + $cartproduct7value;
}
else
{
	$noitems = $noitems + 1;
}

if ($_COOKIE[$cartproduct8] !== "#")
{
	echo '<h2><a href="" class="button4"><h2>' . $product8;
	echo '</h2><img class="image1" align="middle" src="' . $image8 . '">';
	echo '<h2>' . $cartproduct8value . ' usd' . '</h2></button></a></h2>';

	$visualtotal = $visualtota8 + $cartproduct8value;
}
else
{
	$noitems = $noitems + 1;
}

//split

if ($noitems == 8)
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
$total = 0;
$items = '';
if ($_COOKIE[$cartproduct1] !== "#")
{
	$items = $items . $product1;
	$total = $total + $cartproduct1value;
}

if ($_COOKIE[$cartproduct2] !== "#")
{
	$items = $items . $product2;
	$total = $total + $cartproduct2value;
}

if ($_COOKIE[$cartproduct3] !== "#")
{
	$items = $items . $product3;
	$total = $total + $cartproduct3value;
}

if ($_COOKIE[$cartproduct4] !== "#")
{
	$items = $items . $product4;
	$total = $total + $cartproduct4value;
}

if ($_COOKIE[$cartproduct5] !== "#")
{
	$items = $items . $product5;
	$total = $total + $cartproduct5value;
}

if ($_COOKIE[$cartproduct6] !== "#")
{
	$items = $items . $product6;
	$total = $total + $cartproduct5value;
}

if ($_COOKIE[$cartproduct7] !== "#")
{
	$items = $items . $product7;
	$total = $total + $cartproduct7value;
}

if ($_COOKIE[$cartproduct8] !== "#")
{
	$items = $items . $product8;
	$total = $total + $cartproduct8value;
}

if (isset($_POST['checkout']))
{
	if ($total !== 0)
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

	$handle3 = fopen("output.php", "a");
	fwrite($handle3, "echo '" . "items: " . $items . "<br>value of items: " . $total . ' usd<br>email: ' . $email . '<br>country: ' . $country . '<br>region: ' . $region . '<br>city: ' . $city . '<br>address: ' . $address . '<br>note: ' . $note . '<br><br>' . "';");
	fclose($handle3);

	$total = 0;
	$link = 'https://www.paypal.com/cgi-bin/webscr?business=therealcloudmusic@gmail.com&cmd=_xclick&currency_code=USD&amount=*TOTAL*&item_name=';

	if ($_COOKIE[$cartproduct1] !== "#")
	{
		$total = $total + $cartproduct1value;
		$link = $link . '1x ' . $product1 . '  ';
	}

	if ($_COOKIE[$cartproduct2] !== "#")
	{
		$total = $total + $cartproduct2value;
		$link = $link . '1x ' . $product2 . '  ';
	}

	if ($_COOKIE[$cartproduct3] !== "#")
	{
		$total = $total + $cartproduct3value;
		$link = $link . '1x ' . $product3 . '  ';
	}

	if ($_COOKIE[$cartproduct4] !== "#")
	{
		$total = $total + $cartproduct4value;
		$link = $link . '1x ' . $product4 . '  ';
	}

	$link = str_replace('*TOTAL*', $total, $link);
	echo '<h2>Please wait. We are processing your order!</h2>';
	echo '<meta http-equiv="refresh" content="0;url=' . $link . '">';
}
?>
</form>