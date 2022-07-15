<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <title>Tabuada</title>
</head>
<body>
    <form method ="post" action="tabuadacal.php">
    Escolha o número que deseja saber a tabuada: 
    <select name='num'>
    <?php
    $a = 1;
    while($a<=10){
    echo"<option value='$a'>$a</option>";
    $a++;
    }
    ?>
    </select>
    </br>
    <input type="submit" value='Enviar'> 
    </form>
</body>
</html>