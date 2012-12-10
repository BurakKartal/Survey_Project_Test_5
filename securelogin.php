<?php

session_start();
if (isset($_SESSION['username'])) {
    
} else {
    header('Location: wrong_login.php');
}

?>