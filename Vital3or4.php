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
    <a href="/">Wiki</a>
</p>
<?php
for ($a = 1, $j = 0, $b = 0, $c = 1; $a <= 20; $b = $c + $j, $a++) {
    echo "При $a позиции (j=$j) число (c=$c) фебоначчи равно" .
        ($b) . "<br/>";
    $j = $c;
    $c = $b;
}
if ($a>$b) {
    echo "Витя получит 3";
}
    else ($a<$b){
    echo "Витя получит 4";
}
    elseif ($a=$b){
    echo "У Вити спорная ситуация";
}
?>
<p><a href="/">Вернутся обратно</a></p>
</body>
</html>


