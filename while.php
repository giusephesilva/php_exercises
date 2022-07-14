<?php
    $c = 1;
    $d = 10;
    while($c<=10){
      echo $c."</br>";
      $c++;
    }
    echo "</br>";
    while($d>=1){
      echo $d."</br>";
      $d--;
    }
?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <title>WHILE</title>
</head>
<body>
    <form method ="post" action="while2.php">
    <?php
    $a = 1;
    while($a<=5){
    echo "valor $a: <input type='number' name='v$a' value='0' min='0' max='100'></br>";
    $a++;
    }
    ?>
    <input type="submit" value="enviar">
</form>
</body>
</html>