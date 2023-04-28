<?php
$name = (trim($_POST['name']));
$pass = (trim($_POST['pass']));
$surname = (trim($_POST['surname']));
$country = (trim($_POST['country']));
$host = 'localhost';
$database = 'TravelAgency';
$user = 'root';
$password = '';
$mysql = new mysqli($host, $user, $password, $database);
$sql = "INSERT INTO `Account` (`Name`, `Surname`, `Country`, `Password`)
VALUES ('$name', '$surname', '$country', '$pass')";
$mysql->query($sql);
header('Location: Index.php');
