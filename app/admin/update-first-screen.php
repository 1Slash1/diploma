<?php
    session_start();

    $login="admin";
    $pass="admin";

    if($_SESSION["login"] !== $login || $_SESSION["pass"] !== $pass){
        header('Location: admin-login.php');
    }

    require_once "includes/connect.php";

    $id = $_GET["id"];

    $update_first_screen = mysqli_fetch_assoc($con->query("SELECT * FROM `first_screen` WHERE `id` = $id"));

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/update-page.css">
    <title>Главный экран</title>
</head>
<body>
    <main>
        <?php include_once "admin-header.php"; ?>

        <section>
            <h2>Редактировать текст (Главный экран)</h2>
            <form action="includes/save-first-screen.php" method="POST">
                <input type="hidden" value="<?php echo $update_first_screen["id"];?>" name="id" >
                <div class="row-edit">
                    <label for="">Заголовок:</label>
                    <textarea name="title" id="" cols="30" rows="7"><?php echo $update_first_screen["title"]?></textarea>
                </div>
                <div class="row-edit">
                    <label for="">Подзаголовок:</label>
                    <textarea name="subtitle" id="" cols="30" rows="7"><?php echo $update_first_screen["subtitle"]?></textarea>
                </div>
                
                <button type="submit">Изменить</button>

                 <a class ="return" href="admin-panel.php">&#8592; Вернуться</a>
            </form>
        </section>

    </main>
    
</body>
</html>