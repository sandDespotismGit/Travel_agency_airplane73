<?php
$host = 'localhost';
$user = 'root';
$password = '';
$database = 'TravelAgency';
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$mysqli = new mysqli($host, $user, $password, $database);
$mysqli->set_charset("utf8mb4");



$result = $mysqli->query('SELECT * FROM Tickets');
while($row = $result->fetch_assoc()){
    echo '<p>'.$row['Price'].'</p>';
}