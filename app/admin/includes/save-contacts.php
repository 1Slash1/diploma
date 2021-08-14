<?php
    session_start();

    $login="admin";
    $pass="admin";

    if($_SESSION["login"] !== $login || $_SESSION["pass"] !== $pass){
        header('Location: admin-login.php');
    }

    require_once "connect.php";

    $address = $_POST["address"];
    $schedule = $_POST["schedule"];
    $mail = $_POST["mail"];
    $numbers = $_POST["numbers"];
    $id = $_POST["id"];

    $con->query("UPDATE `contacts` SET `address` = '$address', `schedule` = '$schedule', `mail` = '$mail', `numbers` = '$numbers' WHERE `contacts`.`id` = $id");
    header('Location: ../admin-panel.php');


?>