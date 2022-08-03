<?php
//printf
$prod = "leite";
$preco = 4.5;

printf("O %s está custando R$ %.2f",$prod,$preco);
echo "</br>";
echo "</br>";
//--------------------------------

//print_r   Pode ser substituido por var_dump ou var_export
$x[0]=4;
$x[1]=3;
$x[2]=8;
//outra forma de declarar: $x = array(4,3,8);

print_r($x);
echo "</br>";
echo "</br>";

//--------------------------------


//wordwrap 

$txt = "Este é um exemplo de String grande que servirá de exemplo para o comando wordwrap em php"; 
$resultado = wordwrap($txt,8,"</br>\n",false);// O primeiro parâmetro é para especificar a variável 
                                      //O segundo para a quantidade de caracteres em cada quebra. 
                                      //O terceiro serve para indicar se será exibido algo que mostre a quebra de forma visual ou no código(</br> para o html e o \n para o código php)
                                      //O quarto serve para informar se irá quabrar as palavras no meio também caso sejam maior que o número de caracteres(false = não quebra e true=pode quebrar para manter a regra da quantidade de caracter)
echo ($resultado);



echo "</br>";
echo "</br>";

//--------------------------------

//strlen

$texto = "Calculando quantos caracteres há nesta frase";
$res = strlen($texto);
echo $res;

echo "</br>";
echo "</br>";

//--------------------------------

//trim

$nome = "  José Antonio Santos    ";//2 espaços antes do nome e 4 espaços depois do nome
echo "$nome - ".strlen($nome)." caracteres";//José Antonio Santos - 26 caracteres   
echo "</br>";
$novo = trim($nome);
echo "$novo - ".strlen($novo)." caracteres";//José Antonio Santos - 20 caracteres

echo "</br>";
echo "</br>";

//--------------------------------

//ltrim e rtrim
$left = ltrim($nome);
$right = rtrim($nome);

echo "$left - ".strlen($left)." caracteres";//José Antonio Santos - 24 caracteres   
echo "</br>";

echo "$right - ".strlen($right)." caracteres";//José Antonio Santos - 22 caracteres   
echo "</br>";

//--------------------------------

//str_word_count
$palavras = str_word_count($texto,0);//$texto = "Calculando quantos caracteres há nesta frase"
echo $palavras;//6
echo"</br>";

$palavras2 = str_word_count($texto,1);
print_r($palavras2);//Array ( [0] => Calculando [1] => quantos [2] => caracteres [3] => h [4] => nesta [5] => frase )
echo"</br>";

$palavras3 = str_word_count($texto,2);
print_r($palavras3);//Array ( [0] => Calculando [11] => quantos [19] => caracteres [30] => h [34] => nesta [40] => frase )
echo"</br>";

//--------------------------------

//explode

$site = "curso em video";
$vetor = explode(" ",$site);//informar caracter de separação e variável string
$vetor2 = explode("o",$site); 
print_r($vetor);//Array ( [0] => curso [1] => em [2] => video )
echo "</br>";
print_r($vetor2);//Array ( [0] => curs [1] => em vide [2] => )
echo "</br>";

//--------------------------------

//str_split

$nome_teste = "Maria";
$vetor3 = str_split($nome_teste);
print_r($vetor3);//Array ( [0] => M [1] => a [2] => r [3] => i [4] => a )
echo "</br>";
//--------------------------------

//implode
$vet[0] = "curso";
$vet[1] = "em";
$vet[2] = "video";

$text = implode(" ",$vet);//informa o caracter de separação e o array. OBS: possivel utilizar também a função join()
echo $text;//curso em video
echo "</br>";   

//--------------------------------


//chr

$letra = chr(67);//caractere de acordo com seu código ASCII
echo "a letra é $letra";
echo "</br>";   

//--------------------------------

//ord
$letra2 = ord("C");
echo "o código ASCII é $letra2";//código ASCII
echo "</br>";   

//--------------------------------

//strtolower e strtoupper
$myname = "Giusephe Oliveira Santos da Silva";
echo "Seu nome é ".strtolower($myname); //Seu nome é giusephe oliveira santos da silva
echo "</br>";
echo "Seu nome é ".strtoupper($myname);//Seu nome é GIUSEPHE OLIVEIRA SANTOS DA SILVA
echo "</br>";


//--------------------------------

//ucfirst e ucwords

$myname2 = "giusephe oliveira";
echo ucfirst($myname2);//Giusephe oliveira
echo "</br>";
echo ucwords($myname2);//Giusephe Oliveira
echo "</br>";

//--------------------------------


//strrev

$n = "iara";
echo strrev($n);//arai
echo "</br>";

//--------------------------------


//strpos  e stripos

$frase = "Estudos em PHP";
echo "a String foi encontrada na posição ".strpos($frase,"PHP");//a String foi encontrada na posição 11
echo "</br>";
echo "a String foi encontrada na posição ".stripos($frase,"php");//a String foi encontrada na posição 11
echo "</br>";
//--------------------------------

//substr_count

$frase2 = "Aprendizados em PHP no curso de PHP";
echo "A palavra PHP foi encontrada ".substr_count($frase2,"PHP")." vezes. "; //A palavra PHP foi encontrada 2 vezes.
echo "</br>";
//--------------------------------

//substr
$site = "Curso em video";
$sub = substr($site,0,5);//Nesse caso o primeiro parâmetro é a variável, depois a posição inicial da substring, lembrando que começa com 0
                         //e por fim o 5 significa quantas posições vai andar.

$sub2 = substr($site,6);// Nesse caso como passou só um parametro, ele vai pegar tudo que vem da posição 6 em diante e transformar em uma substring.

$sub3 = substr($site,-5);//Nesse caso ele irá criar uma substring com as ultimas 5 letras.
echo $sub;//curso
echo "</br>";
echo $sub2;//m video
echo "</br>";
echo $sub3;
echo "</br>";

//--------------------------------

//str_pad
$na = "Guanabara";
$new = str_pad($na,30," ",STR_PAD_RIGHT);
print("teste $new teste");//teste Guanabara     teste -  nesse caso ele coloca espaços para completar a direita, as outras formas são STR_PAD_LEFT e STR_PAD_BOTH
echo "</br>";
//--------------------------------

//str_repeat
$u = str_repeat("PHP",5);
echo "texto gerado foi $u";//texto gerado foi PHPPHPPHPPHPPHP
echo "</br>";

//--------------------------------

//str_replace e str_ireplace

$o = "Eu gosto de estudar Matemática";
$p = str_replace("Matemática","PHP",$o);
echo $p;//Eu gosto de estudar PHP
echo "</br>";
$l = str_ireplace("matemática","PHP",$o);
echo $l;//Eu gosto de estudar PHP

//--------------------------------
?>