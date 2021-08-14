<?php
    session_start();

    $login="admin";
    $pass="admin";

    if($_SESSION["login"] !== $login || $_SESSION["pass"] !== $pass){
        header('Location: admin-login.php');
    }

    require_once "connect.php";

    $id = $_POST["id"];
    $name = $_POST["name"];
    $title = $_POST["title"];
    $review = $_POST["review"];

    $con->query("UPDATE `reviews` SET `name` = '$name', `title` = '$title', `review` = '$review' WHERE `reviews`.`id` = $id");
    
    header('Location: ../admin-panel.php');

?>