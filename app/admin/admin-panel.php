<?php
    session_start();

    $login="admin";
    $pass="admin";

    if($_SESSION["login"] !== $login || $_SESSION["pass"] !== $pass){
        header('Location: admin-login.php');
    }

    require_once "includes/connect.php";

    $social_networks = $con->query("SELECT * FROM `social_networks`");
    $first_screen = $con->query("SELECT * FROM `first_screen`");
    $doctors = $con->query("SELECT * FROM `doctors`");
    $about_us = $con->query("SELECT * FROM `about_us`");
    $services = $con->query("SELECT * FROM `services`");
    $reviews = $con->query("SELECT * FROM `reviews`");
    $contacnts = $con->query("SELECT * FROM `contacts`");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/admin-panel.css">
    <title>Админка</title>
</head>
<body>

    <?php include_once "admin-header.php"; ?>

    <main>
                                                <!-- Соц. Сети -->
        <section class="social-networks">
            <div class="container">
                <h2>Раздел <<Соц. Сети>></h2>
                                        
                <table>
                    <thead>
                        <tr>
                            <th style="width: 1%">#</th>
                            <th style="width: 45%">Инстаграм</th>
                            <th style="width: 5%"></th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php
                            while ($row = $social_networks->fetch_assoc()) { 
                                echo '
                                        <tr>
                                            <th>'. $row["id"] .'</th>
                                            <td>'. $row["link"] .'</td>
                                            <td class="social-networks__btn"><a href="update-social-networks.php?id='. $row["id"] .'">Редактировать</a></td>
                                        </tr>
                                     ';
                            }
                        ?>
                    </tbody>
                </table>
            </div>
        </section>

        <hr>
                                                                <!-- Главный экран -->
        <section class="first-screen">
            <div class="container">
                <h2>Раздел <<Главный экран>></h2>
                                        
                <table>
                    <thead>
                        <tr>
                            <th style="width: 1%">#</th>
                            <th style="width: 22.5%">Заголовок</th>
                            <th style="width: 22.5%">Подзагаловок</th>
                            <th style="width: 5%"></th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php
                            while ($row = $first_screen->fetch_assoc()) { 
                                echo '
                                    <tr>
                                        <th>'. $row["id"] .'</th>
                                        <td>'. $row["title"] .'</td>
                                        <td>'. $row["subtitle"] .'</td>
                                        <td class="first-screen__btn"><a href="update-first-screen.php?id='. $row["id"] .'">Редактировать</a></td>
                                    </tr>
                                ';
                            }
                        ?>
                    </tbody>
                </table>
            </div>
        </section>
            
        <hr>
                                                                    <!-- Врачи -->
        <section class="doctors" id="doctors">
            <div class="container">
                <h2 class="doctors__title">Раздел <<Сотрудники>></h2>

                <table>
                    
                    <thead>
                        <tr>
                            <th style="width: 1.5%">#</th>
                            <th style="width: 25%">Фото</th>
                            <th style="width: 25%">Ф.И.О.</th>
                            <th style="width: 28%">Должность</th>
                            <th style="width: 12%"></th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php
                            while ($row = $doctors->fetch_assoc()) { 
                                echo '
                                    <tr>
                                        <th>'. $row["id"] .'</th>
                                        <td>'. $row["image"] .'</td>
                                        <td>'. $row["name"] .'</td>
                                        <td>'. $row["position"] .'</td>
                                        <td class="doctors__btn-group">
                                            <ul class="btn-group">
                                                <li><a class="link" href="update-doctors.php?id='. $row["id"] .'">Редактировать</a></li>
                                                <li><a class="link2" href="includes/delete-doctors.php?id='. $row["id"] .'">Удалить</a></li>
                                            </ul>
                                        </td>
                                    </tr>
                                ';
                            }
                        ?>
                    </tbody>
                </table>

                <h2 class="doctors__title-add">Добавить сотрудника</h2>

                <form action="includes/add-doctors.php" enctype="multipart/form-data" method="POST">
                    <div class="doctors__form-item">
                        <label for="">Фото:</label>
                        <input type="file" name="image" require>
                        <h3> Максимальный размер фото 220x220px! </h3>
                        <br>    
                    </div>
                    <div class="doctors__form-item">
                        <label for="">Ф.И.О.:</label>
                        <input type="text" name="full-name" require>
                    </div>
                    <div class="doctors__form-item">
                        <label for="">Должность:</label>
                        <input type="text" name="position" require>
                    </div>
                    <button>Добавить</button>
                </form>
            </div>
        </section>

        <hr>

        <section class="about-us" id="about-us">
            <div class="container">
                <h2>Раздел <<О нас>></h2>

                <table>
                    <thead>
                        <tr>
                            <th style="width: 1.5%">#</th>
                            <th style="width: 67%">Текст</th>
                            <th style="width: 10%"></th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php
                            while ($row = $about_us->fetch_assoc()) { 
                                echo '
                                    <tr>
                                        <th>'. $row["id"] .'</th>
                                        <td>'. $row["text"] .'</td>
                                        <td class="about-us__btn"><a href="update-about-us.php?id='. $row["id"] .'">Редактировать</a></td>
                                    </tr>
                                ';
                            }
                        ?>
                    </tbody>
                </table>
            </div>
        </section>

        <hr>
                                                            <!-- Услуги -->
        <section class="services" id="services">
            <div class="container">
                <h2>Раздел <<Услуги>></h2>

                <table>
                    <thead>
                        <tr>
                            <th style="width: 1.5%">#</th>
                            <th style="width: 80%">Текст</th>
                            <th style="width: 7%">Цены</th>
                            <th style="width: 8%"></th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php
                            while ($row = $services->fetch_assoc()) { 
                                echo '
                                    <tr>
                                        <th>'. $row["id"] .'</th>
                                        <td>'. $row["title"] .'</td>
                                        <td>'. $row["subtitle"] .'</td>
                                        <td class="services__btn"><a href="update-services.php?id='. $row["id"] .'">Редактировать</a></td>
                                    </tr>
                                ';
                            }
                        ?>
                    </tbody>
                </table>
            </div>
        </section>

        <hr>

        <section class="reviews" id="reviews">
            <div class="container">
                <h2>Раздел <<Отзывы>></h2>

                <table>
                    <thead>
                        <tr>
                            <th style="width: 1.5%">#</th>
                            <th style="width: 15%">Имя</th>
                            <th style="width: 15%">Заголовок</th>
                            <th style="width: 40%">Отзыв</th>
                            <th style="width: 9%"></th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php
                            while ($row = $reviews->fetch_assoc()) { 
                                echo '
                                    <tr>
                                        <th>'. $row["id"] .'</th>
                                        <td>'. $row["name"] .'</td>
                                        <td>'. $row["title"] .'</td>
                                        <td>'. $row["review"] .'</td>
                                        <td class="reviews__btn-group">
                                            <ul class="btn-group">
                                                <li><a class="link" href="update-reviews.php?id='. $row["id"] .'">Редактировать</a></li>
                                                <li><a class="link2" href="includes/delete-reviews.php?id='. $row["id"] .'">Удалить</a></li>
                                            </ul>
                                        </td>
                                    </tr>
                                ';
                            }
                        ?>
                    </tbody>
                </table>
            
                <h2 class="reviews__title-add">Добавить отзыв</h2>

                <form action="includes/add-reviews.php" method="POST">
                    <div class="reviews__form-item">
                        <label for="">Имя:</label>
                        <input type="text" name="name" require>
                    </div>
                    <div class="reviews__form-item">
                        <label for="">Заголовок:</label>
                        <input type="text" name="title" require>
                    </div>
                    <div class="reviews__form-item">
                        <label for="">Отзыв:</label>
                        <textarea name="review" id="" cols="30" rows="8" require></textarea>
                    </div>
                    <button>Добавить</button>
                </form>

            </div>                
        </section>
        
        <hr>

        <section class="contacnts" id="contacts">
            <div class="container">
                <h2>Раздел <<Контакты>></h2>

                <table>
                    <thead>
                        <tr>
                            <th style="width: 1.5%">#</th>
                            <th style="width: 20%">Адрес</th>
                            <th style="width: 20%">Рассписание</th>
                            <th style="width: 20%">Почта</th>
                            <th style="width: 17%">Телефон</th>
                            <th style="width: 11%"></th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php
                            while ($row = $contacnts->fetch_assoc()) { 
                                echo '
                                    <tr>
                                        <th>'. $row["id"] .'</th>
                                        <td>'. $row["address"] .'</td>
                                        <td>'. $row["schedule"] .'</td>
                                        <td>'. $row["mail"] .'</td>
                                        <td>'. $row["numbers"] .'</td>
                                        <td class="contacnts__btn"><a href="update-contacts.php?id='. $row["id"] .'">Редактировать</a></td>
                                    </tr>
                                ';
                            }
                        ?>
                    </tbody>
                </table>
            </div>    
        </section>

        <footer>
            <ul class="footer__nav-block">
                <li><a href="#header">Главная</a></li>
                <li><a href="#doctors">Сотрудники</a></li>
                <li><a href="#about-us">О нас</a></li>
                <li><a href="#services">Услуги</a></li>
                <li><a href="#reviews">Отзывы</a></li>
                <li><a href="#contacts">Контакты</a></li>
            </ul>
        </footer>

    </main>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="/js/main.js"></script>

</body>
</html>
