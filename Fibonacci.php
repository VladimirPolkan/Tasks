<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Числа Фибоначчи</title>
</head>
<body>

<h1>Числа Фибоначчи3:</h1>

<p><a href="https://ru.wikipedia.org/wiki/%D0%A7%D0%B8%D1%81%D0%BB%D0%B0_%D0%A4%D0%B8%D0%B1%D0%BE%D0%BD%D0%B0%D1%87%D1%87%D0%B8#:~:text=0%2C%201%2C%201%2C%202,6765%2C%2010946%2C%2017711%2C%20%E2%80%A6&text=%D0%B2%20%D0%BA%D0%BE%D1%82%D0%BE%D1%80%D0%BE%D0%B9%20%D0%BF%D0%B5%D1%80%D0%B2%D1%8B%D0%B5%20%D0%B4%D0%B2%D0%B0%20%D1%87%D0%B8%D1%81%D0%BB%D0%B0,%D0%9F%D0%B8%D0%B7%D0%B0%D0%BD%D1%81%D0%BA%D0%BE%D0%B3%D0%BE%20(%D0%B8%D0%B7%D0%B2%D0%B5%D1%81%D1%82%D0%BD%D0%BE%D0%B3%D0%BE%20%D0%BA%D0%B0%D0%BA%20%D0%A4%D0%B8%D0%B1%D0%BE%D0%BD%D0%B0%D1%87%D1%87%D0%B8).">Wiki</a></p>
<?php
for($a=1,$j=0,$b=0, $c =1;$a<=20;$b=$c+$j,$a++)
{echo "При $a позиции (j=$j) число (c=$c) фебоначчи равно".
        ($b)."<br/>";
$j=$c;
$c=$b;}
?>
<p><a href="http://project3">Вернутся обратно</a></p>
</body>
</html>