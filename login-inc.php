<?php

$username=$_POST['username'];
$password=$_POST['password'];

$conn=mysqli_connect('localhost', 'root','');

if(!$conn){
    echo "<br>Not Connected to server";
}


if(!mysqli_select_db($conn,'jayganesh')){

    echo "<br> Not Connected to data Base";
}

        $table= 'login';

		$sql = "SELECT * FROM $table WHERE username = '$username';";
			$result = mysqli_query($conn, $sql);
			$result_check = mysqli_num_rows($result);

			if($result_check < 1)
			{
				header("Location: ../reg.php?login=username_not_found");
				exit();
			}

			else
			{
				if ($row = mysqli_fetch_assoc($result))
				{
					if(!$password = $row['password'])
					{
						header("Location: ../reg.php?login=incorrect_password");
						exit();
					}

					elseif($password = $row['password'])
					{
						$_SESSION['user_name'] = $row['username'];
						header("Location: ../index.html?login=success");
						exit();
					}
				}
			}
?>