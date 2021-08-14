<?php
    session_start();

    $login="admin";
    $pass="admin";

    if($_SESSION["login"] !== $login || $_SESSION["pass"] !== $pass){
        header('Location: admin-login.php');
    }

    require_once "includes/connect.php";

    $id = $_GET["id"];

    $update_contacts =  mysqli_fetch_assoc($con->query("SELECT * FROM `contacts` WHERE `id` = $id"));

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
            <h2>Редактировать текст (Контактная информация)</h2>
            <form action="includes/save-contacts.php" method="POST">
                <input type="hidden" value="<?php echo $update_contacts["id"];?>" name="id" >
                <div class="row-edit">
                    <label for="">Адрес:</label>
                    <textarea name="address" id="" cols="30" rows="4"><?php echo $update_contacts["address"]?></textarea>
                </div>
                <div class="row-edit">
                    <label for="">Рассписание:</label>
                    <textarea name="schedule" id="" cols="30" rows="4"><?php echo $update_contacts["schedule"]?></textarea>
                </div>
                <div class="row-edit">
                    <label for="">Почта:</label>
                    <textarea name="mail" id="" cols="30" rows="4"><?php echo $update_contacts["mail"]?></textarea>
                </div>
                <div class="row-edit">
                    <label for="">Телефон:</label>
                    <textarea name="numbers" id="" cols="30" rows="4"><?php echo $update_contacts["numbers"]?></textarea>
                </div>
                
                <button type="submit">Изменить</button>

                 <a class ="return" href="admin-panel.php">&#8592; Вернуться</a>
            </form>
        </section>

    </main>
    
</body>
</html>