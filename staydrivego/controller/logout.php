<?php 
    session_start();
    unset($_SESSION['flag']);
    setcookie('firstname','$userFirstName', time() -3600,'/');
    setcookie('username', $username, time() -3600,'/') ;
    setcookie('status', 'true', time() -3600, '/');
    header('location: ../view/home.php');
?>