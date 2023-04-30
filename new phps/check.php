<?php
$name = filter_var(trim($_POST['name']),FILTER_SANITIZE_STRING);
$login = filter_var(trim($_POST['login']),FILTER_SANITIZE_STRING);
$pass = filter_var(trim($_POST['pass']),FILTER_SANITIZE_STRING);
$host = 'localhost';
$database = 'test';
$user = 'root';
$password = '';
$mysql = new mysqli($host, $user, $password, $database);
$sql = "INSERT INTO `users` (`name`, `pass`, `login`)
VALUES ('$name', '$pass', '$login')";
$mysql->query($sql);
header('Location: TravelAgency/Index.php');