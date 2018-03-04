<?php
include 'maincss.html';
echo '<font face="arial">';
if ($_POST)
{
	$content1 = ($_POST['text1']);
	if ($content1 == 'password123dadada')
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