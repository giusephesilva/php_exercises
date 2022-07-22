<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <title>Função</title>
</head>
<body>

<?php

function soma($a,$b){
    $s = $a + $b;
    return $s;
}

/* Outra forma de escrever a mesma função

function soma($a,$b){
    return $a + $b;
}

*/

$x = soma(3,4);

echo $x;
?>
    
</body>
</html>