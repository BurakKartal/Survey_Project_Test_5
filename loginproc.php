<?php

session_start();

include('config.inc');

$login = mysql_query("SELECT * FROM welcome WHERE (Name = '" . mysql_real_escape_string($_POST['username']) . "') and (Password = '" . mysql_real_escape_string(md5($_POST['password'])) . "')");

if (mysql_num_rows($login) == 1) {

    $_SESSION['username'] = $_POST['username'];
    $_SESSION['password'] = $_POST['password'];
    header('Location: survey_007.htm');
} else {

    header('Location: survey_005.php');

}
?>

