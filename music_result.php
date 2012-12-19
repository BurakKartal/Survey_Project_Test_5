<?php

$hostname = 'localhost';
$dbname = 'survey';
$username = 'root';
$password = '';

$con = mysql_connect($hostname, $username, $password) or DIE('Connection to host is failed, perhaps the service is down!');

mysql_select_db($dbname) or DIE('Database name is not available!');


$sql = "INSERT INTO `music_survey`(`userid`, `username`, `email`, `country`, `gender`, `agegroup`, `Alternative`, `Blues`, `BooksandSpoken`, `ChildrensMusic`, `Classical`, `Comedy`, `Countrytype`, `EasyListening`, `Electronic`, `HipHopRap`, `Jazz`, `Latin`, `Metal`, `PopandRock`, `UrbanRnB`, `WorldFolk`, `ContactMeAboutMusic`) 
VALUES ('','$_POST[Name]','$_POST[Email]','$_POST[Country]','$_POST[Sex]','$_POST[Age_Group]','$_POST[Favorie_Music_Alternative]','$_POST[Favorie_Music_Blues]','$_POST[Favorie_Music_Books_and_Spoken]','$_POST[Favorie_Music_Childrens_Music]','$_POST[Favorie_Music_Classical]','$_POST[Favorie_Music_Comedy]','$_POST[Favorie_Music_Country]','$_POST[Favorie_Music_Easy_Listening]','$_POST[Favorie_Music_Electronic]','$_POST[Favorie_Music_Hip_Hop_Rap]','$_POST[Favorie_Music_Jazz]','$_POST[Favorie_Music_Latin]','$_POST[Favorie_Music_Metal]','$_POST[Favorie_Music_Pop_and_Rock]','$_POST[Favorie_Music_Urban_RnB]','$_POST[Favorie_Music_World_Folk]','$_POST[Contact_Me_About_Music]')";

if (!mysql_query($sql, $con)) {
    die('Error: ' . mysql_error());
}
mysql_close($con);
header('Location: saved_successful.php');
?>
