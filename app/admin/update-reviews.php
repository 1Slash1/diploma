<?php
    session_start();

    $login="admin";
    $pass="admin";

    if($_SESSION["login"] !== $login || $_SESSION["pass"] !== $pass){
        header('Location: admin-login.php');
    }

    require_once "includes/connect.php";

    $id = $_GET["id"];

    $update_reviews =  mysqli_fetch_assoc($con->query("SELECT * FROM `reviews` WHERE `id` = $id"));

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/update-page.css">
    <title>Услуги</title>
</head>
<body>
    <main>
        <?php include_once "admin-header.php"; ?>

        <section>
            <h2>Редактировать Отзыв (Отзывы)</h2>
            <form action="includes/save-reviews.php" method="POST">
                <input type="hidden" value="<?php echo $update_reviews["id"];?>" name="id" >
                <div class="row-edit">
                    <label for="">Псевдоним/Имя:</label>
                    <textarea name="name" id="" cols="30" rows="7"><?php echo $update_reviews["name"]?></textarea>
                </div>
                <div class="row-edit">
                    <label for="">Заголовок:</label>
                    <textarea name="title" id="" cols="30" rows="7"><?php echo $update_reviews["title"]?></textarea>
                </div>
                <div class="row-edit">
                    <label for="">Отзыв:</label>
                    <textarea name="review" id="" cols="30" rows="7"><?php echo $update_reviews["review"]?></textarea>
                </div>
                
                <button type="submit">Изменить</button>

                 <a class ="return" href="admin-panel.php">&#8592; Вернуться</a>
            </form>
        </section>

    </main>
    
</body>
</html>