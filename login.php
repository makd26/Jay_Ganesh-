<?php 
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<center>
	<h1>Enter your name:</h1>
</center>

<form action="index.php" method="POST">
	<input type="text" name="username">
	<input type="submit" name="login">
</form>
<?php 
$r = $_POST['username'];
$_SESSION['printname']=$r;
?>

</body>
</html>