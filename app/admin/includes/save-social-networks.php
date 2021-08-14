<?php
    session_start();

    $login="admin";
    $pass="admin";

    if($_SESSION["login"] !== $login || $_SESSION["pass"] !== $pass){
        header('Location: admin-login.php');
    }

    require_once "connect.php";

    $id = $_POST["id"];
    $link = $_POST["link"];

    $con->query("UPDATE `social_networks` SET `link` = '$link' WHERE `social_networks`.`id` = $id");
    header('Location: ../admin-panel.php');
?>