<?php
    session_start();

    $login="admin";
    $pass="admin";

    if($_SESSION["login"] !== $login || $_SESSION["pass"] !== $pass){
        header('Location: admin-login.php');
    }

    require_once "connect.php";

    $id = $_POST["id"];
    $text = $_POST["text"];

    $con->query("UPDATE `about_us` SET `text` = '$text' WHERE `about_us`.`id` = $id");

    header('Location: ../admin-panel.php');

?>