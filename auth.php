<?php
$login = filter_var(trim($_POST['login']),FILTER_SANITIZE_STRING);
$pass = filter_var(trim($_POST['pass']),FILTER_SANITIZE_STRING);
$host = 'localhost';
$database = 'TravelAgency';
$user = 'root';
$password = '';
$mysql = new mysqli($host, $user, $password, $database);
$sql = "SELECT * FROM `Account` WHERE `Name` = '$login' AND `Password` = '$pass'";
$result = $mysql->query($sql);
$current_user = $result->fetch_assoc();
if(count($current_user) == 0){
    echo "User not found";
    exit();
}
setcookie('Name', $current_user['Name'], time() + 3600, "/");
setcookie('IsAdmin', $current_user['IsAdmin'], time() + 3600, "/");
header('Location: Index.php');
print_r($current_user);
