<?php
session_start();
require_once 'connect.php';

$login = $_POST['login'];
$pass = $_POST['pass'];

$check_user = mysqli_query($connect, "SELECT * FROM 'user' WHERE 'login'='$login' AND 'pass'='$pass'");
if (mysqli_num_rows($check_user) > 0){

} else{
    $_SESSION['message']='Неверный логин или пароль';
    header ('Location: ../index.php');
}