<?php

    $nome = $_POST["nome"];
    $idade = $_POST["idade"];
    $sexo = $_POST["sexo"];

    echo "Seu nome é $nome, sua idade é $idade e você é $sexo";
    
?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
</br>
    <?php
        if ($idade>=18) {
            echo "Maior de idade";
        }
        else {
            echo "Menor de idade";
        }

    ?>


</br>
    <a href="index.php"> 
       <button>voltar</button> 
    </a>
    
</body>
</html>