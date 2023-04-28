<?php
setcookie('Name', '', time() - 3600, "/");
setcookie('IsAdmin', 0, time() - 3600, "/");
header('Location: Index.php');