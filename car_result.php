<?php

$hostname = 'localhost';
$dbname = 'survey';
$username = 'root';
$password = '';

$con = mysql_connect($hostname, $username, $password) or DIE('Connection to host is failed, perhaps the service is down!');

mysql_select_db($dbname) or DIE('Database name is not available!');


$sql = "INSERT INTO `car_survey`(`userid`, `username`, `email`, `country`, `gender`, `agegroup`, `typeofcar`, `seats`, `doors`, `cylinders`, `fuel`, `ageofcar`, `colour`, `transmission`, `engineposition`)
    VALUES ('','$_POST[Name]','$_POST[Email]','$_POST[Country]','$_POST[Sex]','$_POST[Age_Group]','$_POST[Car_Type]','$_POST[Seats]','$_POST[Doors]','$_POST[Cylinders]','$_POST[Fuel]','$_POST[Age_Of_Car]','$_POST[Color]','$_POST[Transmission]','$_POST[Engine_Position]')";
if (!mysql_query($sql, $con)) {
    die('Error: ' . mysql_error());
}
mysql_close($con);
header('Location: saved_successful.php');
?>
