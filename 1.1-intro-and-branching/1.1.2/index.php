<?php

$time = date("H");
$dayNumber = date("N");

switch ($dayNumber) {
    case 1: $day = 'Понедельник'; break;
    case 2: $day = 'Вторник'; break;
    case 3: $day = 'Среда'; break;
    case 4: $day = 'Четверг'; break;
    case 5: $day = 'Пятница'; break;
    case 6: $day = 'Суббота'; break;
    case 7: $day = 'Воскресенье'; break;
}

if ($time >= 6 && $time < 11) {
    $text = "Доброе утро!<br>Сегодня {$day}";
    $backgroundUrl = "https://pixabay.com/get/e832b90621f4023ed1534705fb0938c9bd22ffd41cb4144893f3c57fa3/morning-1789903_1920.jpg";
} elseif ($time >= 11 && $time < 18) {
    $text = "Добрый день!<br>Сегодня {$day}";
    $backgroundUrl = "https://pixabay.com/get/e83db5092cf2023ed1534705fb0938c9bd22ffd41cb4144893f3c77faf/daylight-1846463_1920.jpg";
} elseif ($time >= 18 && $time < 23) {
    $text = "Добрый вечер! <br>Сегодня {$day}";
    $backgroundUrl = "https://pixabay.com/get/eb36b80e2bf0093ed1534705fb0938c9bd22ffd41cb4144893f3c77ba5/summer-2391348_1920.jpg";
} else {
    $text = "Доброй ночи! <br>Сегодня {$day}";
    $backgroundUrl = "https://pixabay.com/get/eb33b8062df6013ed1534705fb0938c9bd22ffd41cb4144893f3c978a6/new-york-2699520_1920.jpg";
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>bPHP - 1.1.1</title>
	<!-- подключение стилевого файла -->
</head>
<body style=" background: url(<?= $backgroundUrl ?>) no-repeat; background-size: 100%">
    <div style="margin-top: 50vh; display: flex; justify-content: center;">
        <div style="min-width: 400px; min-height: 80px; background-color: lightgray; text-align: center; opacity: 0.7;
        border-radius: 10px">
            <h1><?= $text ?></h1>
        </div>
    </div>
</body>
</html>