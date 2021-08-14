<?php
$host = "localhost";
$username = "root"; 
$password = "root";
$db = "dentistry";

$con = new mysqli($host, $username, $password, $db);

if(!$con) {
    echo 'Подключение отсутствует!';
    die();
}

?>