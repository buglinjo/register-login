<?php
	$con  = mysqli_connect("db_host","db_user","db_pass","db_name");
	$myUser = $_POST['user'];
	$myPass = $_POST['pass'];
	$myUser = stripslashes($myUser);
	$myPass = stripslashes($myPass);
	//$myUser = mysql_real_escape_string($myUser);
	//$myPass = mysql_real_escape_string($myPass);	
		/*	
			$stmt = $con->prepare("SELECT * FROM menu1 WHERE username=?");
			$stmt->bind_param('s', $myUser);
			$stmt->execute();
			$result = $stmt->get_result();
		*/	
	
	$result = mysqli_query($con,"SELECT * FROM menu1 WHERE username = '$myUser' AND password = '$myPass'");		
	$num = $result->num_rows;
		if($num == 1){
			echo "Logged In Successfully.";
		}else{
			echo "Username or Password is incorrect.";
		}
	mysqli_close($con);
?>