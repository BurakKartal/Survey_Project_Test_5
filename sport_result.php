<?php

$hostname = 'localhost';
$dbname = 'survey';
$username = 'root';
$password = '';

$con = mysql_connect($hostname, $username, $password) or DIE('Connection to host is failed, perhaps the service is down!');

mysql_select_db($dbname) or DIE('Database name is not available!');


$sql = "INSERT INTO `sport_survey`(`userid`, `sex`, `age`, `country`, `sportclub`, `favorathlete`, `favorsport`, `oftendosport`, `watchedsport`, `oftenwatchtv`, `oftensportevent`, `oftensportpage`) 
    VALUES ('','$_POST[Sex]','$_POST[Age_Group]','$_POST[Country]','$_POST[Sports_Club_Member]','$_POST[Favorite_Athlete]','$_POST[Favorite_Sport_To_Compete_In]','$_POST[How_Often_Do_You_Compete]','$_POST[Favorite_Sport_To_Watch]','$_POST[How_Often_Do_You_Watch_On_TV]','$_POST[How_Often_Do_You_Attend_Events]','$_POST[How_Often_Do_You_Read_Sports_Papers]')";
if (!mysql_query($sql, $con)) {
    die('Error: ' . mysql_error());
}
mysql_close($con);
header('Location: saved_successful.php');
?>
