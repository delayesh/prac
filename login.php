<?php

require_once __DIR__.'/boot.php';

if (check_auth()) {
    header('Location: /');
    die;
}
?>

<?php flash() ?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="css/styleauto.css">
    <title>Авторизация</title>
    <link rel="icon" href="./pic/logo.png" type="image/x-icon">
</head>
<body>
<section class="container w-25">
    <div class="zag">Вход</div>
    <div class="slog">
        <span>
            <span class="slog1">Ваша</span>
            <span class="slog2">конфиденциальность -</span>
            <span class="slog3">наш</span>
            <span class="slog4">
        приоритет. </br>Доверьтесь нам.
        <br />
        <br />
        <br />
            </span>
                <span class="slog5">
                <br />
                Введите Логин и Пароль:
                <br />
                </span>
        </span>
    </div>

    <form method="post" action="do_login.php">
        <div class="form-group">
            <input type="username" name="username" class="form-control" id="username" placeholder="Логин">
        </div>
        <div class="form-group">
            <input type="password" name="password" class="form-control" id="password" placeholder="Пароль">
        </div>
        <button type="submit" class="btn-primary">Войти</button>
    </form>
    <div class="reg">
        <a class="col" href="./registration.php">Нет аккаунта? Зарегистрируйтесь!</a>
    </div>
</section>
</body>
</html>