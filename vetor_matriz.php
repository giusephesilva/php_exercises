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

</br>
</br>
</br>
</br>
<!--Tratativa de Array-->

<!--Tag Pre-->
<pre>
<?php

$v = array("A","J","M","X","K");
print_r($v);


?>
</pre>
</br>
</br>
<?php
var_dump($v);
echo "</br>";

//count
echo "O vetor possui ".count($v)." elementos"; 

echo "</br>";
//array_push
array_push($v,7);
var_dump($v);
echo "</br>";

//array_pop

array_pop($v);
var_dump($v);
echo "</br>";


//array_unshift

array_unshift($v,9);
var_dump($v);
echo "</br>";

//array_shift

array_shift($v);
var_dump($v);
echo "</br>";

//sort

$a=array(5,9,1,4);
sort($a);
var_dump($a);
echo "</br>";

//rsort
$a=array(5,9,1,4);
rsort($a);
var_dump($a);
echo "</br>";

//asort
$a=array(5,9,1,4);
asort($a);
var_dump($a);
echo "</br>";


//arsort
$a=array(5,9,1,4);
arsort($a);
var_dump($a);
echo "</br>";


//ksort
$m[3]="C";
$m[2]="E";
$m[0]="H";
$m[1]="B";

var_dump($m);
ksort($m);
echo "</br>";
var_dump($m);

echo "</br>";


//krsort

$m = array(3=>"C",2=>"E",0=>"H",1=>"B");
krsort($m);
var_dump($m);




?>


</body>
</html>