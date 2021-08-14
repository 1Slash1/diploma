<?php 

    require_once "connect.php";

    $id = $_GET["id"];

    $con->query("DELETE FROM `doctors` WHERE `doctors`.`id` = $id");

    header('Location: ../admin-panel.php');

?>