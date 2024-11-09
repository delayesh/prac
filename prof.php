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
    <link rel="stylesheet" href="css/styleprof.css">
    <title>Профиль</title>
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

                <?php } else { ?>
                    <a href="login.php" class="btn btn-primary">Войти</a>
                <?php }  ?>
        </article>

    </header>

    <main>
        <div class="ramprof"></div>
        <img class="proficon" src="pic/proficon.png">         
        <div class="linfo1">ФИО:</div>
        
        <div class="linfo2">Логин:</div>

        <div class="linfo3">Пароль:</div>
        <button type="submit" class="primary2">Изменить</button>

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