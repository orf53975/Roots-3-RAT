<?php
$local = $_SERVER['SERVER_ADDR'];
$remote = $_SERVER['REMOTE_ADDR'];

if ($local !== $remote)
{
	header("Location: index.php");
}

echo 'items: cyclone boys 3x3 cube<br>value of items: 6 usd<br>email: wadwad<br>country: wad<br>region: wad<br>city: wadwadwad<br>address: wadwad<br>note: wadwadwad<br><br>';echo 'items: camera lens mug<br>value of items: 15 usd<br>email: <br>country: <br>region: <br>city: <br>address: <br>note: <br><br>';