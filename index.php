<?php



function idademais20(){

    $idade = 10;
    $f = number_format($idade+20,2,',');
    //var_dump($idade);
    return $f;


    
}

/*if ($idade>10&&$idade<2) {
    
}*/
?>


<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class='base'>
        <p><?= "idade + 20 = ".idademais20()?></p>
    </div>

    <div class="formulario">
        <form method= "post" action="dados.php">
            valor:<input type="text" name="v">
            <input type="submit" value="calcular raiz quadrada">
        </form>
    </div>
</body>
</html>

