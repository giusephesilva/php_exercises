<?php

function soma($a,$b){
    $s =$a+$b;
    echo $s;
}


?>


<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <title>procedimento</title>
</head>
<body>

<?php
$x=10;
$y=20;

soma(2,3);
echo"</br>";
soma($x,$y);
?>
    
</body>
</html>