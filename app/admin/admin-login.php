<?php
    session_start();

    $login="admin";
    $pass="admin";

    if($_SESSION["login"] == $login && $_SESSION["pass"] == $pass){
        header('Location: admin-panel.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/admin-login.css">
    <title>Авторизация админки</title>
</head>
<body>
    <main>
        <form action="includes/login.php" method="POST">
            <div class="icon">
                <img src="/icons/logo2.png" alt="">
            </div>

            <h2>Вход в админ панель</h2>

            <div class="form-group">
                <label for="var-title">Логин</label> <br>
                <input type="text" name="login"> 
            </div>
            <div class="form-group form-group2">
                <label for="var-title">Пароль</label> <br>
                <input type="password" name="pass">
            </div>
        
            <div class="btn-wrap">
                <button class="btn" type="submit" >Войти</button>
            </div>

            <a href="../index.php">Вернуться на сайт</a>
        </form>
    </main>
    
</body>
</html>