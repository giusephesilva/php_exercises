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
            Nome:<input type="text" name="nome"/> </br>
            idade:<input type="number" name="idade"></br>
            <fieldset><legend>Sexo</legend>
                <input type="radio" name="sexo" id="masc" value="Homem">
                <label for="masc">Masculino</label></br>
                <input type="radio" name="sexo" id="fem" value="Mulher">
                <label for="fem">Feminino</label></br>
            </fieldset>
            <input type="submit" value="Enviar"/>

        </form>
    </div>


    <div>
        <a href="operacoes.php">
            <button>Operações matemáticas</button>
        </a>
    </div>

    <div>
        <a href="while.php">
            <button> Estrutura de repetição while</button>
        </a>
    </div>

    <div>
        <a href="dowhile.php">
            <button> Estrutura de repetição do while</button>
        </a>
    </div>

    <div>
        <a href="tabuada.php">
            <button> Tabuada utilizando estruturas de repetição</button>
        </a>
    </div>

    <div>
        <a href="for.php">
            <button>  Estrutura de repetição FOR</button>
        </a>
    </div>



</body>
</html>

