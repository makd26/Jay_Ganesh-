<?php 

$con=mysqli_connect('localhost', 'root','');

if(!$con){
	echo "<br>Not Connected to server";
}

if(!mysqli_select_db($con,'jayganesh')){

	echo "<br> Not Connected to data Base";
}

$Username=$_POST["Username"];
$Email=$_POST["Email"];
$Subject=$_POST["Subject"];
$Message=$_POST["Message"];
 

$con=mysqli_connect('localhost', 'root','');

if(!$con){
	echo "<br>Not Connected to server";
}

if(!mysqli_select_db($con,'jayganesh')){

	echo "<br> Not Connected to data Base";
}

$Username=$_POST["Username"];
$Email=$_POST["Email"];
$Subject=$_POST["Subject"];
$Message=$_POST["Message"];


$sql="INSERT INTO contact (Username,Email,Subject,Message) VALUES ('$Username','$Email','$Subject','$Message')";

if(!mysqli_query($con,$sql)){
	echo "<br>Not Inserted";
	 die ('ERROR: Unable to insert data to FeedBack table: ' . mysqli_error($con));
}




?>
 	
	<h1 align="center">Thank You <?php echo $Username ;?></h1>
	<h1 align="center">Visit Us Again</h1>



	