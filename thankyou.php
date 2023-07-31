<?php 

$con=mysqli_connect('localhost', 'root','');

if(!$con){
	echo "<br>Not Connected to server";
}

if(!mysqli_select_db($con,'jayganesh')){

	echo "<br> Not Connected to data Base";
}

$Name=$_POST["Name"];
$Last_Name=$_POST["Last_Name"];
$Phone=$_POST["Phone"];
$Email=$_POST["Email"];
$Message=$_POST["Message"];


$sql="INSERT INTO oldfeedBack (Name,Last_Name,Phone,Email,Message) VALUES ('$Name','$Last_Name','$Phone','$Email','$Message')";

if(!mysqli_query($con,$sql)){
	echo "<br>Not Inserted";
	 die ('ERROR: Unable to insert data to FeedBack table: ' . mysqli_error($con));
}



 ?>

 	
	<h1 align="center">Thank You <?php echo $Name ;?></h1>
	<h1 align="center">Visit Us Again</h1>




	