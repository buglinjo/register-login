<?
session_start();
include "config.php";
error_reporting(0);
$localhost = "localhost" == $_SERVER["HTTP_HOST"];
$auth = "true" == $_SESSION['authenticated'];
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title> Register - Login </title>
<meta name="keywords" content="" />
<meta name="description" content="რეგისტრაცია და შესვლა." />
 
<script type="text/javascript" src="./js/jquery-1.7.1.min.js"></script>

<link href="./css/first_page.css" rel="stylesheet" type="text/css" />

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script>

</head>
<body>


<div id="main">

	<div id="content">
	<?php include "includes/first_page.php";?>
	</div>	
	
</div>

</body>
</html>
