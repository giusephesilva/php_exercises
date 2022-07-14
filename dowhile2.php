<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <title>DO WHILE 2</title>
</head>
<body>

<?php

$v = $_POST["num"];

echo "O Valor fatorial de $v é: </br>";

$c = $v;
$fat = 1;

do{
    $fat = $fat * $c;
    $c--;
}while($c>=1);

echo "$v! = $fat";


?>
    
</body>
</html>