<?php

$login = $_POST['logim'];
$pass = $_POST['password'];
$email = $_POST['email'];
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$middleName = $_POST['middleName'];
$code = $_POST['code'];

$codeWord = 'nd82jaake';

$isCorrect = false;

$patternLogin = '/\W/';
if (preg_match($patternLogin, $login)) {
    echo 'Поле логин не должно содержать символы @/*?,;:. <br>';
}

if (strlen($pass) < 8) {
    echo 'Длина пароля должна быть минимум 8 символов <br>';
}

$patternEmail = '/\A[^@]+@([^@\.]+\.)+[^@\.]+\z/';
if (!preg_match($patternEmail, $email)) {
    echo 'Почта должна быть формата почта@домен.доменнаязона <br>';
}

if (strlen($firstName) === 0) {
    echo 'Поле Имя не может быть пустым <br>';
}

if (strlen($lastName) === 0) {
    echo 'Поле Фамилия не может быть пустым <br>';
}

if (strlen($middleName) === 0) {
    echo 'Поле Отчество не может быть пустым <br>';
}

if ($codeWord !== trim(strtolower($code))) {
    echo 'Вы неверно указали Кодовое слово <br>';
}

// не могу придумать... пытался через флаг, но тогда последняя проверка решает исход...
if ($isCorrect) {
    echo 'Вы успешно зарегистрировались!<br>';
}

// Ошибка в Создать файлы form.html и index.php
// Ошибка в Поля Фамилия, Имя, Отчество не могут быть пустыми