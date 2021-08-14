<?php
    session_start();

    $login="admin";
    $pass="admin";

    if($_SESSION["login"] !== $login || $_SESSION["pass"] !== $pass){
        header('Location: admin-login.php');
    }

    require_once "includes/connect.php";

    $id = $_GET["id"];

    $update_text =  mysqli_fetch_assoc($con->query("SELECT * FROM `about_us` WHERE `id` = $id"));

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/update-page.css">
    <title>Редактировать</title>
</head>
<body>
    <main>
        <?php include_once "admin-header.php"; ?>

        <section>
            <h2>Редактировать текст (О нас)</h2>

            <form action="includes/save-about-us.php" method="POST">
                <input type="hidden" value="<?php echo $update_text["id"];?>" name="id" >

                <div class="row-edit">
                    <label for="">Параграф <em><?php echo $update_text["id"];?></em></label>
                    <textarea name="text" id="" cols="30" rows="7"><?php echo $update_text["text"]?></textarea>
                </div>
                
                <button type="submit">Изменить</button>

                 <a class ="return" href="admin-panel.php">&#8592; Вернуться</a>
            </form>
        </section>

    </main>
    
</body>
</html>