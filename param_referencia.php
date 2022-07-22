<?php

function teste(&$x){ //adicionado o "&" (E comercial)
    $x += 2;
   echo $x;
}
$a=10;
teste($a); //irá imprimiro resultado de 12
echo "</br>";
echo $a //Nesse caso irá imprimir 12 também, pois passamos o valor por refêrencia da variável

?>