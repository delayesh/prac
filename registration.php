<?php
require_once __DIR__.'/boot.php';

$user = null;

if (check_auth()) {
    // Получим данные пользователя по сохранённому идентификатору
    $stmt = pdo()->prepare("SELECT * FROM `users` WHERE `id` = :id");
    $stmt->execute(['id' => $_SESSION['user_id']]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);
}
?>
<?php if ($user) { ?>

    <h1>Добро пожаловать <?=htmlspecialchars($user['username'])?>!</h1>
    <a href="index.php">Вернуться на гланую</a>

    <form class="mt-5" method="post" action="do_logout.php">
        <button type="submit" class="btn btn-primary">Выйти</button>
    </form>

<?php } else { ?>

    <?php flash(); ?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="css/stylereg.css">
    <title>Регистрация</title>
    <link rel="icon" href="./pic/logo.png" type="image/x-icon">
</head>
<body>
<section class="container w-25">
    <div class="zag">Регистрация</div>
    <div class="slog">
        <span>
            <span class="slog1">Ваша</span>
            <span class="slog2">конфиденциальность -</span>
            <span class="slog3">наш</span>
            <span class="slog4">
        приоритет.</br> Доверьтесь нам.
    
    </div>
    <form method="post" action="do_register.php">
        <div class="form-group">
            <input type="text" name="FIO" class="form-control" id="FIO" placeholder="ФИО">
        </div>
        <div class="form-group">
            <input type="username" name="username" class="form-control" id="login" placeholder="Логин">
        </div>
        <div class="form-group">
            <input type="password" name="password" class="form-control" id="password" placeholder="Пароль">
        </div>
        <button type="submit" class="btn btn-primary">Войти</button>
    </form>
    <?php } ?>
</section>
</body>
</html>