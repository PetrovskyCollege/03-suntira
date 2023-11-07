<?php
session_start();
require_once 'connect.php';

$login = $_POST['login'];
$pass = $_POST['pass'];

$check_user = mysqli_query($connect, "SELECT * FROM `user` WHERE `login`='$login' AND `password`='$pass'");
if (mysqli_num_rows($check_user) > 0){
$user = mysqli_fetch_assoc($check_user);
$_SESSION['user'] =[
    "id" => $user['id'],
    "login"=> $user['login'],

]
} else{
    $_SESSION['message']='Неверный логин или пароль';
    header ('Location: ../index.php');
}