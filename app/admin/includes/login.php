<?php 
    $login="admin";
    $pass="admin";
  
    if($login === $_POST['login'] && $pass === $_POST['pass']){
    
    session_start();

    $_SESSION["login"] = $_POST['login'];
    $_SESSION["pass"] = $_POST['pass'];
    
    header('Location: ../admin-panel.php');

    } else {
        echo 'Ошибка в login.php!';
    }

?>