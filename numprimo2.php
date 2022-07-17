<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <title>Numero Primo resultado</title>
    <link rel="stylesheet" type="text/css" href="style.css">

</head>
<body>

<div>
    <?php
    $num = $_POST['num'];
    $multiplos = 0;
    echo "Analisando o número $num...</br>";
    echo "Valores multiplos: ";

    for($i=1;$i<=$num;$i++){
      if ($num%$i==0) {
        echo "$i ";
        $multiplos++;
      }
    }
    echo "</br>";
    echo "Total de Multiplos: $multiplos </br>";
    echo "Resultado: $num ";
    if ($multiplos==2) {
        echo "<div class='primo'><h2> É primo </h2></div>";
    }else{
        echo "<div class='naoprimo'><h2> Não é primo </h2></div>";
    }
    ?>
</div>

    
</body>
</html>