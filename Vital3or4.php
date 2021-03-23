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
    <a href="https:/https://qna.habr.com/q/555109">Как составить строку из значений нескольких переменных</a>
</p>
<?php
// $array = file_get_contents('input.txt');
//echo '<pre>';
//print_r($array);
//echo '</pre>';

//$array = [5, 4, 16, 19, 31, 2];
$array = [8, 29, 4, 7, 12, 15, 17, 24, 1];
$s1 = "";
$s2 = "";

for ($a = 0, $b = 0, $j = 1; $j <= $array[0]; $j++) {
    if ($array[$j] % 2 == 0) {
        $b++;
        $s2 = join(" ", [$s2, strval($array[$j])]);

    } else {
        $a++;
        $s1 = join(" ", [$s1, strval($array[$j])]);

    }
}

echo "$s1<br/>";
echo "$s2<br/>";

if ($a > $b) {
    echo "Витя получит 3";
} elseif ($a < $b) {
    echo "Витя получит 4";
} else {
    echo "У Вити 4, но с натяжкой";
}
echo ".\" <br/>\n Всего $array[0], из них \"3\".. $a, а  \"4\"..$b ";
?>
<p><a href="/">Вернутся обратно</a></p>
</body>
</html>


