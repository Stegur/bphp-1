<?php

//$firstName = $_POST['firstName'];
//$lastName = $_POST['lastName'];
//$middleName = $_POST['middleName'];

$firstName = 'иван';
$lastName = 'иванов';
$middleName = 'иванович';

$fullName = ucfirst($lastName) . ' ' . ucfirst($firstName) . ' ' . ucfirst($middleName);

$fio = mb_strtoupper(mb_substr($lastName, 0, 1)) . mb_strtoupper(mb_substr($firstName, 0, 1)) . mb_strtoupper(mb_substr
    ($middleName, 0, 1));

$surnameAndInitials = ucfirst($lastName) . ' ' . mb_strtoupper(mb_substr($firstName, 0, 1)) . '.' . mb_strtoupper
(mb_substr
    ($middleName, 0, 1)) . '.';

echo "Полное имя: '$fullName' <br>"; // Не работает
echo "Фамилия и инициалы: '$fio'  <br>";
echo "Аббревиатура: '$surnameAndInitials' <br>";// Часть неработает

