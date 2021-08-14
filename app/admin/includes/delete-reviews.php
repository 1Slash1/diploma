<?php 

    require_once "connect.php";

    $id = $_GET["id"];

    $con->query("DELETE FROM `reviews` WHERE `reviews`.`id` = $id");

    header('Location: ../admin-panel.php');

?>