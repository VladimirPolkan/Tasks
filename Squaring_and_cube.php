<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
//{background-color: pink;} Наверно цвет меняется только в .css((
<h1>Возведение в квадрат и куб</h1>

<?php

for ($i = 1; $i <= 5; $i++) {
    echo "<li>$i  в квадрате равно=" . ($i * $i);
    echo ",  $i  в кубе равно=" . ($i * $i * $i) . "</li>\n";
}
?>

<p><a href="/">Вернутся обратно</a></p>
</body>
</html>