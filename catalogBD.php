<?php
require 'connect.php';
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$mysqli = new mysqli($host, $user, $password, $database);
$mysqli->set_charset("utf8mb4");


//Переделать то что ниже под запрос к нашей БД

$result = $mysqli->query('SELECT * FROM Catalog');
while($row = $result->fetch_assoc()){
    echo '<p>'.$row['Country'].'</p>';
}