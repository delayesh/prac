<?php
// Инициализируем сессию
session_start();
// Функция проверки, авторизован ли пользователь
function isLoggedIn() {
    return isset($_SESSION['user_id']) && $_SESSION['user_id'];
}
?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="css/style.css">
    <title>Главная</title>
    <link rel="icon" href="./pic/logo.png" type="image/x-icon">
</head>
<body>
    <header>

        <div class="nav1">
            <a href="index.php" class="navi"><b>Главная</b></a>
        </div>
        <img class="logo" src="pic/logo.png" />
        <div class="nav2">
            <a href="ps.php" class="navi">Психология</a>
        </div>

        <article class="container">
                <!-- Отображаем различные кнопки, в зависимости от того, авторизован ли пользователь -->
                <?php if (isLoggedIn()) { ?>

                    <a href="logout.php" class="btn btn-secondary">Выйти</a>
                    <a href="prof.php">
                        <img src="pic/prof.png" class="prof" width="20" height="20">
                    </a>

                <?php } else { ?>
                    <a href="login.php" class="btn btn-primary">Войти</a>
                <?php }  ?>
        </article>

    </header>

    <main>

        <img src="pic/sc.png" class="sc" width="600" height="400">
        </br>
        </br>
        <div class="priv">
            <span>
                <span class="divspan">
                Новый корпус Ягульской школы приветствует своих учеников!
                </span>
                </br>
                </br>
                <span class="divspan2">
                В новом здании созданы все условия для комфортной и продуктивной учебы:
                просторные классы,<br> библиотека, спортивный и актовый залы. Уже в ближайшее
                время здесь начнутся занятия в<br> медиацентре, инженерном классе и
                театральной мастерской.
                <br />
                <br />
                 «Новый корпус даёт нам возможность, во-первых, большое внимание уделить
                инженерному<br> образованию, мы закупили оборудование именно для подготовки в
                этой сфере. Будем плотнее<br> заниматься ранней профилизацией. Очень важно,
                чтобы ребёнок, заканчивая школу, уже<br> понимал, чего он хочет в жизни, каков
                у него дальнейший путь, должен уметь ставить перед собой<br> цели и достигать
                их. Также в школе развивается артистическое направление: в этом году
                набрали<br> первый хореографический класс. Также есть медиацентр, школьное
                радио и телевидение», – <br>рассказала директор школы Ирина Ларионова.
                </span>
            </span>
        </div>
        <img src="pic/va.png" class="va" width="600" height="400">
        <div class="bva">Бузилова Вера Анатольевна</div>
        <br>
        <div class="opis">
            Педагог-психолог высшей квалификационной категории, заместитель<br> директора по
            ВР МБОУ «Ягульская средняя общеобразовательная<br> школа»
            <br>
            (с.Ягул, Удмуртская Республика)
        </div>
        <br>
        <br>
        <br>
        <div class="osebe">
            <span>
                <span class="osebe2">
                «..Оглядываясь на свой профессиональный путь, точнее, на огромное
                количество коллег, которые<br> стали моими учителями, через лекции, занятия,
                книги, конференции, вебинары, личные встречи,<br> благодаря которым, мне
                посчастливилось видеть благодарные улыбки ребят, родителей,<br> учителей, а,
                главное, на имеющееся неугасающее желание стремиться к новому, другому,<br>
                актуальному, делиться с ребятами и взрослыми, - наверное, могу сказать о
                себе:
                <br>
                </span>
                <span class="osebe3">«Я -профессионал!»</span>

            </span>
        </div>

    </main>
    <br>
    <br>
    <footer>
        <a href="https://vk.com/yagulschool">
          <img src="pic/vk.png" class="vk" width="40" height="40">
        </a>
        <div class="numtel">
            <span>
                <span class="tel">
                    Телефон:
                    <br />
                </span>
                <span class="num">+7 (3412)70-87-85</span>
            </span>
        </div>

        <div class="emadr">
            <span>
                <span class="em">
                    E-mail:
                    <br />
                </span>
                    <span class="adr">
                    yagulsosh@zav.udmr.ru
                </span>
            </span>
        </div>
    </footer>

</body>
</html>