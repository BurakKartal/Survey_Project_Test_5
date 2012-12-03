<?php

$hostname = 'localhost';
$dbname = 'survey';
$username = 'root';
$password = '';

$con =mysql_connect($hostname, $username, $password) or DIE('Connection to host is failed, perhaps the service is down!');

mysql_select_db($dbname) or DIE('Database name is not available!');


$sql = "INSERT INTO `users`(`userid`, `username`, `password`, `email`)
  VALUES ('','$_POST[Name]','$_POST[password]','$_POST[Email]')";

if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }


mysql_close($con);
require_once('/createregister.php');
?>
