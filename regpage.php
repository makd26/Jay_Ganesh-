<?php 

$con=mysqli_connect('localhost', 'root','');

if(!$con){
	echo "<br>Not Connected to server";
}

if(!mysqli_select_db($con,'jayganesh')){

	echo "<br> Not Connected to data Base";
}

$username=$_POST["userame"];
$email=$_POST["email"];
$password=$_POST["password"];
$mandal_name=$_POST["mandal_name"];
$address=$_POST["address"];
$mandal_city=$_POST["mandal_city"];


$table_name='login'

$sql="INSERT INTO login (username,email,password,mandal_name,address,mandal_city) VALUES ('$username','$email','$password','$mandal_name','$address','$mandal_city')";

if(!mysqli_query($con,$sql)){
	echo "<br>Not Inserted";
	 die ('ERROR: Unable to insert data to FeedBack table: ' . mysqli_error($con));
}



 ?>

 	
	<h1 align="center">THANK YOU FOR REGISTERING<?php echo $Name ;?></h1>
	



	