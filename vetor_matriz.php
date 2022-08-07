<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <title>Vetor e Matriz</title>
</head>
<body>
  
<?php

$n[0]=10;
$n[1]=20;
$n[2]=30;
$n[3]=40;
//ou 
$x = array(10,20,30,40);
$x[]=50;//Nesse caso ele identifica que já tem 4 posições, e só acrescenta mais uma com o valor informado
print_r($n);
echo "</br>";
print_r($x);
echo "</br>";


$c = range(5,20,5);//Nesse caso ele cria um vetor onde a primeira posição é 5, a ultima é 20, e cria posições suficentes entre os dois numeros aumentando de 5 em 5, nesse caso precisa ser 2 posições, totalizando 4 espaços.
print_r($c);
echo "</br>";

foreach($c as $valor){
    echo "$valor ";
}
echo "</br>";

//chaves personalizadas e chaves associativas

$x = array(5=>1,8=>2,11=>3,15=>4);
print_r($x);//
echo "</br>";

$a = array("t1"=>1,"t2"=>2,"t3"=>3,"t4"=>4);
unset($a["t3"]);
print_r($a);
echo "</br>";

$b = array("nome"=>"João","idade"=>20,"peso"=>75.6);
foreach($b as $campo=>$valor){
    echo "$campo = $valor /";
}
echo "</br>";

//Matriz

$n = array(array(2,3),array(3,4),array(9,5));
print_r($n);
echo "</br>";

$n[0][1] = 10;
print_r($n);
echo "</br>";

$g[0][0]=1;
$g[0][1]=20;
$g[1][0]=5;
$g[1][1]=9;
$g[2][0]=7;
$g[2][1]=11;

print_r($g);


?>


</body>
</html>