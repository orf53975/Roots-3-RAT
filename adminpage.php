<?php
include 'maincss.html';
echo '<font face="arial">';
if ($_POST)
{
	$content1 = ($_POST['text1']);
	$hashed = crypt($content1, '$1$rasmusle$');
	if ($hashed == '$1$rasmusle$epcER.6iySwi4W6e7yBcs0')
	{
		include 'output.php';
	}
}
else
{
	echo '<form action = "" method = "POST">';
	echo '<h2>password:</h2>
<input class = "input1" type = "text" name = "text1"></input>
<input class = "button3" type = "submit" value = "post"></input><br>';
}
?>