<?php

$hostname = 'localhost';
$dbname = 'survey';
$username = 'root';
$password = '';

$con = mysql_connect($hostname, $username, $password) or DIE('Connection to host is failed, perhaps the service is down!');

mysql_select_db($dbname) or DIE('Database name is not available!');


$sql = "INSERT INTO `Contact_Details`(`userid`, `companyname`, `position`, `city`, `states`, `phone`, `website`, `country`, `comments`)
    VALUES ('','$_POST[Company]','$_POST[Position]','$_POST[City]','$_POST[State]','$_POST[Phone]','$_POST[Web_Site]','$_POST[Country]','$_POST[Comments]')";
if (!mysql_query($sql, $con)) {
    die('Error: ' . mysql_error());
}
mysql_close($con);
header('Location: saved_successful.php');
?>
