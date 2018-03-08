<?php
include 'topbar.php';
include 'dropdown.html';

if ($_POST)
{
	$name = ($_POST['text1']);
	$content = ($_POST['text2']);

	mail("therealcloudmusic@gmail.com", "Feedback", "name: " . $name . "   content:" . $content);
}
?>
<h1>post review</h1>
<form action = "" method = "POST">
<h2>name</h2>
<input class = "input1" type = "text" name = "text1"></input>
<input class = "button3" type = "submit" value = "post"></input><br>
<h2>content</h2>
<input class = "input2" type = "text" name = "text2"></input>
</form>
<?php include 'bottombar.html' ?>