<?php 
echo "As variáveis podem armazenar vários tipos de dados<br>";

echo "Primero tipo: ****Escalares****:<br>"; 
echo "São eles: String(conjunto de caracteres entre aspas), Inteiro(número inteiro, Float(numero com casas decimais) e Boolean(verdadeiro ou falso).<br>";
echo "String: sequencia de caracteres. Ex:<br>";
$texto = "Olá Mundo!";
$texto2 = 123;
$texto3 = 20.50;
$texto4 = true;
echo $texto;
echo "<br>";
echo "<hr>";
var_dump($texto);
if(is_string($texto)):
	echo "É uma string, porque é uma cadeia de caracteres entre aspas!";
	else:
	echo "Não é uma string!";
	endif;
echo "<hr>";

var_dump($texto2);
if(is_int($texto2)):
	echo "123: É um inteiro!";
	else:
	echo "$texto2 NÃO é um inteiro!";
	endif;
echo "<hr>";

echo "<br>";

var_dump($texto3);
if(is_float($texto3)):
	echo " 20.50: É um numero de ponto flutuante porque tem casas decimais!";
	else:
	echo " $texto3 NÃO é um numero com casas decimais, logo não é ponto flutuante!";
	endif;
echo "<hr>";

var_dump($texto4);
if(is_bool($texto4)):
	echo " É um booleano! Um booleano só pode ser declarado como TRUE ou FALSE.";
	else:
	echo " -$texto4 NÃO é um booleano!";
	endif;
echo "<hr>";


echo "Segundo tipo: ****Compostos****:<br>" ;
echo " São eles: Array e objeto.<br>";

$carro = array("Gol","Vectra Sedan","Camaro");
var_dump($carro);

 ?> 