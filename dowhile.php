<?php
    $c = 1;

    do{
        echo $c;
        $c++;
    }while($c<=10);
?>



<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <title>DO WHILE</title>
</head>
<body>
    <form method = "post" action="dowhile2.php">
    <h2>Digite o número que gostaria de saber o Fatorial: </h2></br>
    <input type="number" name="num">
    <input type="submit" value="Enviar">
    </form>
</body>
</html>