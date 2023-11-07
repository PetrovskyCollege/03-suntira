<?php
$connect = mysqli_connect("localhost","root","","epd");
if(!$connect) {
    die("Ошибка соединения с БД");
}