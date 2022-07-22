<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <title>Parâmetros Dinâmicos</title>
</head>
<body>

<?php
    function soma(){
        $p = func_get_args(); //Pega todos os argumentos passados na chamada da função e atribui em um vetor $p
        $total = func_num_args(); //pega o numero de argumentos passados e atribui na variável $total
        $soma = 0;

        for($i=0;$i<$total;$i++){  //como o vetor começa em 0 precisa colocar valor inicial 0 e no segundo parametro a variavel $i deve ser menor que numero de argumentos
            $soma += $p[$i];
        }
    return $soma;
    }

    $resultado = soma(3,2,5,6); //$p[0] = 3 , $p[1] = 2 , $p[2] = 5 e $p[3] = 6
    echo $resultado;
?>

</body>
</html>