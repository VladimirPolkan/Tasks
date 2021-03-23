<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Что получит Витя 3 или 4? </title>
</head>
<body>

<h1>чего больше 3-ек или 4-ок:</h1>

<p>
    <a href="https://www.youtube.com/watch?v=ZmsXBwRy9DM&t=334s&ab_channel=ITDoctor">Чтение из файла и запись в файл на
        PHP</a>
</p>
<?php
$Hoepage = file_get_contents('input.txt');
for ($a = 0, $j = 1, $b = 0; $j <= $Hoepage; $j++) {
    if ($j % 2 == 0) {
        $b++;
    } else {
        $a++;
    }
    echo "j=$j a=$a b=$b <br/>\n";
}
if ($a > $b) {
    echo "Витя получит 3";
} elseif ($a < $b) {
    echo "Витя получит 4";
} else {
    echo "У Вити 4, но с натяжкой";
}
?>
<p><a href="/">Вернутся обратно</a></p>
</body>
</html>


