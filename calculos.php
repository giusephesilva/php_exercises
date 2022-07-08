<?php
    $numero = $_POST["num"];
    $operacao = $_POST["oper"];
    

    switch($operacao){
        case "dobro":
            $result = $numero * 2;
            break;
        case "cubo":
            $result = pow($numero,3);
            break;
        case "raiz":
            $result = sqrt($numero);
            break;
    }
    echo "Operação selecionada: ".$operacao."</br>";
    echo "O Valor é de: ".$result;

?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <title>calculos mat</title>
</head>
<body>
</br>
    <a href="operacoes.php"> 
       <button>voltar</button> 
    </a>  
</body>
</html>