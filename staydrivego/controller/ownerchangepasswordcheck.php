<?php
session_start();
require_once "../model/ownermodel.php";

$currentpassword = $_POST['Current'];
$password = $_POST['New'];
$conpassword = $_POST['Confirm'];


if ($currentpassword == '' || $password == '' || $conpassword == '') {
    echo 'All Fields must be filled.';
} elseif (strlen($password) < 6 || strpbrk($password, '!@#$%^&*()+=-[]{}|:;"\'<>,.?/~`') == false || strpbrk($password, '0123456789') == false || strpbrk($password, 'ABCDEFGHIJKLMNOPQRSTUVWXYZ') == false || strpbrk($password, 'abcdefghijklmnopqrstuvwxyz') == false) {
    echo 'Password should be at least 8 characters with at least one uppercase letter, one lowercase letter, one special character, and one number.';
} elseif ($password !== $conpassword) {
    echo 'Passwords do not match.';
} else {
    $status = changeOwnerPassword($currentpassword, $password);
    if ($status) {
        header('location:../view/carowneraccount.php');
    } else {
        echo 'Incorrect password.';
    }
}
