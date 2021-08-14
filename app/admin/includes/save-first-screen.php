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

    $con->query("UPDATE `first_screen` SET `title` = '$title', `subtitle` = '$subtitle' WHERE `first_screen`.`id` = $id");
    header('Location: ../admin-panel.php');
    
?>