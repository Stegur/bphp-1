<?php

$uploadDir = 'images/';
if (isset($_POST['image'])) {
    $uploadFile = $uploadDir . basename($_FILES['image']['name']);


    if (move_uploaded_file($_FILES['image']['tmp_name'], $uploadFile)) {
        echo 'Картинка загружена';
    }
}

$files = scandir($uploadDir);

?>


<!doctype html>
<html lang="ru">
<head>
<meta charset="UTF-8">
<title>Gallery</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<form action="index.php" method="post" enctype="multipart/form-data">
		<input type="file" name="image">

		<input type="submit" name="Загрузить">
	</form>
    <?php
    foreach ($files as $file) {
        if ($file !== '.' && $file !== '..') {
//            if (exif_imagetype($file) != IMAGETYPE_GIF) {
                echo "<img class=\"image\" src=\"" . $uploadDir . $file . "\" >";
//            }
        }

    }
    ?>
	<img src="" alt="">
</body>
</html>
