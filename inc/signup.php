<?php
session_start();
require_once 'connect.php';
 $login = $_POST['login'];
 $name = $_POST['name'];
 $pass = $_POST['pass'];
 $tel = $_POST['tel'];
 mysql_query($connect, "INSERT INTO `user` (`id`, `login`, `user_name`, `password`, `tel_number`, `id_role`, `img_user`) VALUES (NULL, '$login', ' $name', ' $pass', ' $tel', NULL, NULL)");
 $_SESSION["message"] = 'Регистрация прошла успешно!';
 header ('');