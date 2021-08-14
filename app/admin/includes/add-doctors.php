<?php 
    session_start();

    $login="admin";
    $pass="admin";

    if($_SESSION["login"] !== $login || $_SESSION["pass"] !== $pass){
        header('Location: admin-login.php');
    }

    
    require_once "connect.php";

    $name = $_POST["full-name"];
    $position = $_POST["position"];

    $path = "photo/" . time() . $_FILES["image"]["name"]; 

    move_uploaded_file($_FILES["image"]["tmp_name"], '../' . $path);

    $image = "admin/" . $path;


    $con->query("INSERT INTO `doctors` (`id`, `image`, `name`, `position`) VALUES (NULL, '$image', '$name', '$position')");
    
    header('Location: ../admin-panel.php');

?>