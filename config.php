<?
$config['db_host']="db_host";
$config['db_name']="db_name";
$config['db_user']="db_user";
$config['db_pswd']="db_pass";

mysql_connect($config['db_host'],$config['db_user'],$config['db_pswd']);
mysql_select_db($config['db_name']);

mysql_query("SET CHARACTER SET utf8");
mysql_query("SET NAMES UTF8");
include "lib/core_functions.php";
include "lib/var.php";
?>
