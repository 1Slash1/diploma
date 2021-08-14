<?php
    session_start();

    $login="admin";
    $pass="admin";

    if($_SESSION["login"] !== $login || $_SESSION["pass"] !== $pass){
        header('Location: admin-login.php');
    }

    require_once "includes/connect.php";

    $id = $_GET["id"];

    $update_doctors =  mysqli_fetch_assoc($con->query("SELECT * FROM `doctors` WHERE `id` = $id"));

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/update-page.css">
    <title>Специалисты</title>
</head>
<body>
    <main>
        <?php include_once "admin-header.php"; ?>

        <section>
            <h2>Редактировать форму специалиста (Врачи)</h2>

            <form action="includes/save-doctors.php" enctype="multipart/form-data" method="POST">

                <input type="hidden" value="<?php echo $update_doctors["id"];?>" name="id" >

                <div class="row-edit">
                    <label for="">Фото:</label>
                    <input type="file" name="image"> <br> 

                    <label for="">Текущее Фото:</label>
                    <?php echo $update_doctors["image"]?>
                </div>
                <div class="row-edit">
                    <label for="">Ф.И.О.:</label>
                    <textarea name="full-name" id="" cols="30" rows="7"><?php echo $update_doctors["name"]?></textarea>
                </div>
                <div class="row-edit">
                    <label for="">Должность:</label>
                    <textarea name="position" id="" cols="30" rows="7"><?php echo $update_doctors["position"]?></textarea>
                </div>
                
                <button type="submit">Изменить</button>

                 <a class ="return" href="admin-panel.php">&#8592; Вернуться</a>
            </form>
        </section>

    </main>
    
</body>
</html>