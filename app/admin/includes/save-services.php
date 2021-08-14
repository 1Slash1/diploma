<?php
    session_start();

    $login="admin";
    $pass="admin";

    if($_SESSION["login"] !== $login || $_SESSION["pass"] !== $pass){
        header('Location: admin-login.php');
    }

    require_once "connect.php";

    $title = $_POST["title"];
    $subtitle = $_POST["subtitle"];
    $id = $_POST["id"];

    $con->query("UPDATE `services` SET `title` = '$title', `subtitle` = '$subtitle' WHERE `services`.`id` = $id");
    header('Location: ../admin-panel.php');


?>