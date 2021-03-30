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
<p>
    <a href="https://www.youtube.com/watch?v=roaWTekVYKA&ab_channel=%D0%9F%D1%80%D0%BEPHP">В этом уроке по PHP изучим функции explode, которая разбивает строку
        в массив по разделителю, и implode,
        которая собирает строку в массив по разделителю</a>
</p>
<?php
$Homepage=file_get_contents('input.txt');
$Homepage=trim($Homepage);
echo $Homepage;
$array=explode(' ', $Homepage);
print_r($array);
?>