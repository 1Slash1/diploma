<?php
    session_start();

    $login="admin";
    $pass="admin";

    if($_SESSION["login"] !== $login || $_SESSION["pass"] !== $pass){
        header('Location: admin-login.php');
    }

    require_once "connect.php";

    $id = $_POST["id"];
    $name = $_POST["full-name"];
    $position = $_POST["position"];

    $path = "photo/" . time() . $_FILES["image"]["name"]; 

    move_uploaded_file($_FILES["image"]["tmp_name"], '../' . $path);

    $image = "admin/" . $path;


    $con->query("UPDATE `doctors` SET `image` = '$image', `name` = '$name', `position` = '$position' WHERE `doctors`.`id` = $id");
    
    header('Location: ../admin-panel.php');

?>