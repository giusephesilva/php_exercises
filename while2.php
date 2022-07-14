<?php

$i = 1;

while ($i<=5) {
    $v = "num".$i; 
    $u = "v".$i; #nome do campo colocado no input ex: v1,v2...
    $$v = isset($_POST[$u])?$_POST[$u]:0;
    $i++;
}

$j = 1;

while ($j<=5) {
    $r = "num".$j;
    echo "Valor $j = ".$$r."</br>";
    $j++;
}


?>