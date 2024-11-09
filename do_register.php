<?php

require_once __DIR__.'/boot.php';

// Проверим, не занято ли имя пользователя
$stmt = pdo()->prepare("SELECT * FROM `users` WHERE `username` = :username");
$stmt->execute(['username' => $_POST['username']]);
if ($stmt->rowCount() > 0) {
    flash('Это имя пользователя уже занято.');
    header('Location: /'); // Возврат на форму регистрации
    die; // Остановка выполнения скрипта
}

// Добавим пользователя в базу
$stmt = pdo()->prepare("INSERT INTO `users` (`username`, `password`, `FIO`) VALUES (:username, :password, :FIO)");
$stmt->execute([
    'username' => $_POST['username'],
    'password' => password_hash($_POST['password'], PASSWORD_DEFAULT),
    'FIO' => $_POST['FIO'],
]);

header('Location: login.php');