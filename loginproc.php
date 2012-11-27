<?php

session_start();

include('config.inc');

$login = mysql_query("SELECT * FROM users WHERE (username = '" . mysql_real_escape_string($_POST['username']) . "') and (password = '" . mysql_real_escape_string($_POST['password']) . "')");

if (mysql_num_rows($login) == 1) {

    $_SESSION['username'] = $_POST['username'];
    $_SESSION['password'] = $_POST['password'];
    header('Location: successful_login.php');
} else {

    header('Location: wrong_login.php');

}
?>

