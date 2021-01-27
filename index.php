<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="static/css/animate.min.css">
    <link rel="stylesheet" href="style.css">
    <base target="_blank"/>
</head>
<body>
        <header class="header__menu wow bounceInDown">
            <div class="textmenu">
                <div class="img wow bounceInLeft">
                    <img src="img1.png" alt="">
                    <img src="img1.png" alt="">
                    <img src="img1.png" alt="">
                    <img src="img1.png" alt="">
                    <img src="img1.png" alt="">
                </div>
                <div class="menutext wow bounceInRight">
                    <h1>RAHAT PALACE</h1>
                    <h3>HOTEL</h3>
                </div>
                <hr class="line">
                <div class="links wow bounceInDown">
                    <ul>
                        <li><a href="https://rahatpapalcehotelexam.herokuapp.com/">Главная</a></li>
                        <li><a href="page1.html">Отель</a></li>
                        <li><a href="page2.html">Номера</a></li>
                        <li><a href="page3.html">СПА центр</a></li>
                        <li><a href="page4.html">Галерея</a></li>
                   </ul>
                </div>
            </div>
        </header>

        <div class="container">
            <div class="row wow pulse">
                <div class="col-md-7 col-xs-12">
                    <div class="items">
                        <h1>“Rahat Palace Hotel” - г. Алматы</h1>
                    </div>
                </div>
                <div class="col-md-5 col-xs-12">
                    <div class="line2">
                        <div class="line1">
                            <img src="bed.png" alt="">
                            <h4>БРОНИРОВАНИЕ НОМЕРА</h4>
                        </div>
                        <div class="block2">
                            <form action="" method="GET">
                                <h4>Заезд</h4>
                                <input type="date">
                                <h4>Выезд</h4>
                                <input type="date">
                                <button type="submit">Найти номер</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <footer class="footer__menu wow bounceIn">
            <div class="container">
                <div class="row">
                    <div class="col-md-2 col-xs-12">
                        <img class="logo" src="logo.png" alt="" width="100%">
                        <p class="city">Алматы, Казахстан</p>
                        <p>
                            <a class="adress" href="">ул. Сатпаева 29/6</a>
                            <a class="number" href="">+7 (727) 250 12 34</a>
                        </p>
                    </div>
                    <div class="col-md-4 col-xs-12">
                        <div class="logotext">
                            <span>Рахат Палас Отель - гармоничное соединение восточной роскоши, европейского изящества, искусство встречать гостей, окружая их вниманием и заботой, остается неизменной традицией, бережно хранимой отелем.</span>
                        </div>
                    </div>
                    <div class="col-md-3 col-xs-12">
                        <div class="map">
                            <a href="map.html">Показать на карте <img src="map.png" alt=""></a>
                        </div>
                    </div>
                    <div class="col-md-3 col-xs-12">
                        <div class="textspan">
                            <span>© 2019 Rahat Palace Hotel. Официальный сайт.
                                    Разработка сайта - <a href="">Jumassilov</a></span>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    <script src="static/js/wow.min.js"></script>
            <script>
            new WOW().init();
            </script>

</body>
</html>