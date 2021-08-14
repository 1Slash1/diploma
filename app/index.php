<?php
   require_once 'admin/includes/connect.php';

    $social_networks = $con->query("SELECT * FROM `social_networks`");
    $first_screen = $con->query("SELECT * FROM `first_screen`");
    $doctors =  $con->query("SELECT * FROM `doctors`");
    $about_us = $con->query("SELECT * FROM `about_us`");
    $services = $con->query("SELECT * FROM `services`");
    $reviews = $con->query("SELECT * FROM `reviews`");
    $contacts = $con->query("SELECT * FROM `contacts`");

?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="/libs/slick/slick.css">
    <link rel="shortcut icon" href="/icons/logo.png" type="image/x-icon">
    <title>Жемчужина</title>
</head>
<body>
    <div class="first-screen">
        
        <div class="img">
            <img src="/background/bg1.svg" alt="">   
        </div>
        
        <div class="container">
            <header>
                <div class="header__logo" id="header">
                    <a href="#header"><img src="/icons/logo.svg" alt=""></a>
                    <div class="logo__text-logo"><a href="#header">Жемчужина</a></div>
                </div>
                <ul class="nav-header">
                    <li><a href="#header" class="nav-header__link">Главная</a></li>
                    <li><a href="#doctors" class="nav-header__link">Врачи</a></li>
                    <li><a href="#about-us" class="nav-header__link">О нас</a></li>
                    <li><a href="#services" class="nav-header__link">Услуги</a></li>
                    <li><a href="#reviews" class="nav-header__link">Отзывы</a></li>
                    <li><a href="#make-an-appointment" class="nav-header__link">Контакты</a></li>
                </ul>
            
                <div class="header__socials">
                    <div class="socials-item">
                        <?php
                            while ($row = $social_networks->fetch_assoc()) { 
                        
                            echo '<a href=" '.$row['link'].'">

                                    <img src="/icons/inst.png"> 
                            
                                 </a>
                                ';
                            }
                        ?>
                    </div>
                </div>
               
            </header>

            <div class="first-screen__info">
                <div class="info__left-block">
                    <div class="info__title">
                        <?php
                            while ($row = $first_screen->fetch_assoc()) { 
                                printf ($row["title"]); 
                        ?>
                    </div>
                    <div class="info__subtitle">
                        <?php
                                printf ($row["subtitle"]); 
                            }
                        ?>
                    </div>
                    <div class="info__buttons">
                        <a href="#make-an-appointment" class="button1">Записаться</a>
                        <a href="#make-an-appointment" class="button2">Консультация</a>
                    </div>
                </div>    
                
                <div class="info__photo">
                    <img src="/background/image1.png" alt="">
                </div>
                
            </div>
            <div class="first-screen__advantages">
                <div class="advantages__block">
                    <div class="advantages__icon">
                        <img src="/icons/icon1.svg" alt="">
                    </div>
                    <div class="advantages__text">
                        <div class="advantages__title">Опыт</div>
                        <div class="advantages__subtitle">Опыт работы более 5 лет</div>
                    </div>
                </div>
                <div class="advantages__block">
                    <div class="advantages__icon">
                        <img src="/icons/icon2.svg" alt="">
                    </div>
                    <div class="advantages__text">
                        <div class="advantages__title">Бесплатно</div>
                        <div class="advantages__subtitle">Бесплатная консультация</div>
                    </div>
                </div>
                <div class="advantages__block">
                    <div class="advantages__icon">
                        <img src="/icons/icon3.svg" alt="">
                    </div>
                    <div class="advantages__text">
                        <div class="advantages__title">Врачи</div>
                        <div class="advantages__subtitle">Высококвалифициро&shyваные врачи</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--ВРАЧИ-->

    <section class="doctors" id="doctors">
        <div class="container">
            <div class="doctors__blocks-wrap">

                <div class="doctors__title">Наши врачи</div>

                <div class="doсtors__slider">

                    <?php while ($row = $doctors->fetch_assoc()) { ?>

                    <div class="doсtors__slider-item">
                        <div class="doсtors__photo">
                            <img src="<?php printf($row["image"]);?>" alt=""> 
                        </div>
                        <div class="doctors__text-block">
                            <h3 class="doсtors__block-subtitle"><?php printf($row["position"]);?></h3>
                            <h3 class="doсtors__block-title"><?php printf($row["name"]);?></h3>
                        </div>
                    </div>
                        
                    <?php }?>

                </div>

            </div>
        </div>
    </section>

    <!--О НАС-->

    <section class="about-us">
        <div class="container">
            <div class="about-us__info" id="about-us">
                <div class="about-us__photo">
                    <img src="/background/image2.png" alt="">
                </div>
                <div class="about-us__text">
                    <h1 class="about-us__title">Расскажем о нас</h1>

                    <?php
                        while ($row = $about_us->fetch_assoc()) { 
                    ?>

                    <ul  class="about-us__paragraphs">
                        <li>
                            <?php printf ($row["text"])?>
                        </li>
                    </ul>

                    <?php } ?>

                </div>
            </div>
        </div>
    </section>

    <!--УСЛУГИ-->

    <section class="services" id="services">
        <div class="container">
            <div class="services__list">
                <h1 class="services__title">Услуги</h1>

                <div class="services__columns">
                    <ul class="services__column1">

                        <?php
                            while ($row = $services->fetch_assoc()) {  
                        ?>

                        <li>
                            <h4><?php printf ($row["title"])?></h4>
                            <div class="price"><?php printf ($row["subtitle"])?></div>
                        </li>

                        <?php } ?>
                    </ul>
        
                </div>
            </div>
        </div>
    </section>

    <!--ОТЗЫВЫ-->

    <section class="reviews" id="reviews">
        <div class="container">
            <div class="reviews__blocks-wrap">
                
                <div class="reviews__main-title">
                    Отзывы
                </div>
                
                <hr>

                <div class="reviews__slider">

                    <?php
                        while($row = $reviews->fetch_assoc()) {  
                    ?>

                    <div class="reviews__slider-item">
                        <h3 class="reviews__name"><?php printf($row["name"]);?></h3>
                        <div class="reviews__slider-block">
                            <h3 class="reviews__title"><?php printf($row["title"]);?></h3>
                            <p>
                                <?php printf($row["review"]);?>
                            </p>
                        </div>
                    </div>
                    
                    <?php } ?>
                </div>

                <a class="reviews__btn" onclick="showWin()">                         <!-- Кнопка для отзыва -->
                    Оставить отзыв
                </a>            
                
            </div>
        </div>

        <div style="text-align: center" id="onWin" class="modalwin">

            <form action="add-review.php" method="POST">
                <div class="modalwin__header">
                    <img src="/icons/logo.svg" alt="">
                    <p>Жемчужина</p>
                </div>
                
                <div class="close"><img src="/icons/cross.ico" alt="" onclick="closeWin()"></div>

                <h2>Оставить свой отзыв</h2>

                <div class="form-group">
                    <input type="text" name="name" placeholder="Имя" required> 
                </div>
                <div class="form-group">
                    <input placeholder="Заголовок" name="title" required>
                <div class="form-group">
                    <textarea placeholder="Отзыв" name="review" cols="37" rows="7" required></textarea>
                </div>
            
                <div class="btn-wrap">
                    <button class="btn" type="submit" >Отправить</button>
                </div>
            </form>
        </div>

        <script type="text/javascript">

            function showWin() {

                /* var darkLayer = document.createElement('div'); // слой затемнения
                darkLayer.id = 'shadow'; // id чтобы подхватить стиль
                document.body.appendChild(darkLayer); */
                
                var modalWin = document.getElementById('onWin'); // находим наше "окно"
                modalWin.style.display = 'block'; // включить

            }

            function closeWin() {
                var modalWin = document.getElementById('onWin'); //  окно
                modalWin.style.display = 'none'; // выключить 
                
            }
            
        </script>

    </section>
                            
    <!--ЗАПИСЬ НА ПРИЁМ-->

    <section class="make-an-appointment" id="make-an-appointment">

        <div id="map">
            <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A13c0a46b53731de03a1309ce77e973151a06b1ba1b87b07b3ffd0cfc177f609f&amp;
            width=100%25&amp;height=560&amp;lang=ru_RU&amp;scroll=false"></script>
        </div>

        <div class="container">
            <div class="make-an-appointment__block-wrapper">
                <div class="main-title">Записаться на приём</div>
                    <form  class="make-an-appointment__inner-block" action="#" method="post" name="form">
                        <label>Ф. И. О. <br>
                        <input class="input" name="name" type="text" require/> <br> 
                        <label >Номер телефона <br>
                        <input class="input" name="number" type="text" require/> <br> 
                        <label>Электроная почта <br>
                        <input class="input" name="email" type="text" /> <br> 
                    
                        <input class="submit text-submit" type="submit" value="Записаться" /> 

                    </form>
                </div>

                <!--Отправка сообщения на почту-->

                <?php
                    $to = "d.kosyakov12@inbox.ru";
                    $name = $_POST['name'];
                    $number = $_POST['number'];
                    $email = trim($_POST['email']);
                    $headers = "From: $email";

                    $message = "Ф.И.О.: $name \nТелефон: $number \nE-mail: $email";
                    mail($to, $headers, $message);
                ?>
            </div>
        </div>
    </section>

    <!--КОНТАКТНАЯ ИНФОРМАЦИЯ-->

    <footer>
        <div class="container">
            <div class="footer__block-wrapper">
                
                <ul class="footer__block-info">
                    <?php
                        while ($row = $contacts->fetch_assoc()) { 
                    ?>
                    <li><?php printf ($row["address"]);?></li>
                    <li><?php printf ($row["schedule"]);?></li>
                    <li><?php printf ($row["mail"]);?></li>
                    <li><?php printf ($row["numbers"]);?></li>
                    <?php } ?>
                </ul>

                <ul class="footer__nav-block">
                    <li><a href="#header">Главная</a></li>
                    <li><a href="#doctors">Врачи</a></li>
                    <li><a href="#about-us">О нас</a></li>
                    <li><a href="#services">Услуги</a></li>
                    <li><a href="#reviews">Отзывы</a></li>
                    <li><a href="#make-an-appointment">Контакты</a></li>
                </ul>
            </div>
        </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="/libs/slick/slick.min.js"></script>
    <script src="/js/main.js"></script>
</body>
</html>

