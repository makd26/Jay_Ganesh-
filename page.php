<?php

$username=$_POST['username'];
$email=$_POST['email'];
$password=$_POST['password'];
$confirm_password=$_POST['confirm_password'];
$mandal_name=$_POST['mandal_name'];
$address=$_POST['address'];
$mandal_city=$_POST['mandal_city'];



echo "You have successfully sign up ".$email;


$conn=mysqli_connect('localhost', 'root','');

if(!$conn){
    echo "<br>Not Connected to server";
}


if(!mysqli_select_db($conn,'jayganesh')){

    echo "<br> Not Connected to data Base";
}

$table= 'login';

$sql="INSERT INTO $table (username,email,password,mandal_name,address,mandal_city) VALUES ('$username','$email','$password','$mandal_name','$address','$mandal_city')";



if(!mysqli_query($conn,$sql)){
    echo "<br>Not Inserted";
     die ('ERROR: Unable to insert data to ' . $table . ' table: ' . mysqli_error($conn));
}else{
    
    echo '<br><a href="http://localhost/mobile/mobdatabase.php"> Click here to see database </a>' ;
    echo "<br> <br> <br> <h2>THANK YOU ".$email;
}



?>
