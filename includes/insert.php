<?php
$con  = mysqli_connect("db_host","db_user","db_pass","db_name");
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$query = mysqli_query($con,"SELECT * FROM menu1 WHERE username = '". $_POST['user']."'");
$number = $query->num_rows;

if($number > 0){
	echo "Try Another Username. It's already registered.";
}else{
	$bool = mysqli_query($con,"INSERT INTO menu1 (username, password)
	VALUES ('$_POST[user]', '$_POST[pass]')");
		if($bool){
			echo "Seccessfully Registered. <br> You will be redirected to first page in 3 seconds!";
			header("refresh: 3; url = ../index.php");
		}else{
			echo "Try Again. <br> You will be redirected to first page in 3 seconds!";
			header("refresh: 3; url = ../index.php");
		}
}
mysqli_close($con);
?>