<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <title>Tabuada resultado</title>
</head>
<body>

<?php
    $v = $_POST["num"];
    echo "Mostrando a tabuada de $v: </br>";
    echo"</br>";
    $i = 1;

    do{ 
        echo "$v X $i = ".$v*$i."</br>";
        $i++;
    }while($i<=10);

?>
    
</body>
</html>