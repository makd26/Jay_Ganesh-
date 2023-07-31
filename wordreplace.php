<html>
<head>
<title>String Replace</title>
</head>
<body>
<form method="post">
Enter the Paragraph<br>
<textarea name = "Text"rows="10" cols="50"></textarea><br>
Word to replace:<br>
<input type= "text" name="toreplace"/><br>
Word to replace with:<br>
<input type= "text" name="replacewith"/><br>
<input type="submit" value="Submit"><br>
</form>
<?php
if($_POST)
{
	$text = $_POST["Text"];
	$torep =  $_POST["toreplace"];
	$repwith =  $_POST["replacewith"];
	echo str_replace($torep, $repwith, $text);
}
?>
</body>
</html>
