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
    <link rel="stylesheet" href="css/styleps.css">
    <title>Психология</title>
    <link rel="icon" href="./pic/logo.png" type="image/x-icon">
</head>
<body>
    <header>

        <div class="nav1">
            <a href="index.php" class="navi">Главная</a>
        </div>
        <img class="logo" src="pic/logo.png" />
        <div class="nav2">
            <a href="ps.php" class="navi"><b>Психология</b></a>
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
            <div class="info">
                <span>
                    <span class="info2">Подростковый период</span>
                        <span class="info3">
                            — важнейший этап жизни, во многом определяющий последующую судьбу
                            человека. Но особенно трудно приходится подростку, когда его взросление
                            проходит в условиях нестабильности в экономической и культурно-ценностной
                            сферах развития современного общества, кризиса семьи. Именно в таких
                            условиях пребывают большинство современных российских подростков. Несмотря
                            на разницу в социальной среде, почти все они остро переживают этот период:
                            становятся агрессивными, непослушными в общении с родителями и учителями,
                            а некоторые начинают употреблять алкоголь и наркотики. В такой ситуации
                            самые заботливые родители и педагоги нередко оказываются беспомощными. Не
                            понимая, что происходит с подростками, они совершают поступки,
                            усугубляющие кризисное состояние их детей.
                            <br>
                            <br>
                            В этих условиях особенно важной представляется помощь со стороны
                            психолога. Однако, несмотря на то, что в последние годы школа проявляет
                            определенную готовность к принятию психолога и у нее сформирована система
                            адекватных или неадекватных ожиданий относительно результатов его работы,
                            все же и сегодня задачи психологического информирования и популяризации
                            психолого-педагогических знаний остаются актуальными.
                            <br>
                            <br>
                            Современная практика работы психолога с подростками весьма разнообразна.
                            Но в этом разнообразии особенно ясно выступают нерешенные или слабо
                            изученные вопросы и проблемы. Одним из таких слабо изученных вопросов
                            является вопрос, касающийся роли популярных лекций в развитии личности
                            подростков. В погоне за всесторонним изучением детей и подростков в
                            стороне остался вопрос факторов влияния на развитие личностных
                            <br>
                            особенностей, тогда как в отношении к подростковому возрасту изучение
                            данного вопроса является достаточно актуальным. Не изучен и вопрос о
                            влиянии популярных лекций на развитие личности подростков.
                        </span>
                </span>
        </div>
        <br>
        <br>
        <br>
        <br>
        <br>
        <div class="rama" width="1260" height="480"></div>
        <div class="lek1">
            <a href="lek1.php" class="lekcii">Лекция 1. «Знаешь ли ты себя?»</a>
        </div>
        <div class="lek2">
            <a href="lek2.php" class="lekcii">Лекция 2. «Ты среди людей»</a>
        </div>
        <div class="lek3">
            <a href="lek3.php" class="lekcii"><b>Лекция 3. «Каков характер, таковы и поступки»</b></a>
        </div>
    </main>

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