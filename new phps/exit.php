<?php
setcookie('user', '', time() - 3600, "/");
header('Location: TravelAgency/Index.php');