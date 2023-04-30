<?php
$login = filter_var(trim($_POST['login']),FILTER_SANITIZE_STRING);
$pass = filter_var(trim($_POST['pass']),FILTER_SANITIZE_STRING);
$host = 'localhost';
$database = 'test';
$user = 'root';
$password = '';
$mysql = new mysqli($host, $user, $password, $database);
$sql = "SELECT * FROM `users` WHERE `login` = '$login' AND `pass` = '$pass'";
$result = $mysql->query($sql);
$current_user = $result->fetch_assoc();
if(count($current_user) == 0){
    echo "User not found";
    exit();
}
setcookie('user', $current_user['name'], time() + 3600, "/");
setcookie('admin', $current_user['isadmin'], time() + 3600, "/");
header('Location: TravelAgency/Index.php');