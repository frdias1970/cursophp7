<?php
/////////////////////////////////////////////////////////////////
//variáveis do tipo básico: string(texto), inteiro(numerico), //
//ponto flutuante(casas decimais), booleano(verdadeiro ////////
//ou falso////////////////////////////////////////////////////

echo "/////////////////////////////////////////////";
echo "<br/>";
echo "Variáveis do tipo básico: String(texto), Inteiro(número, integer), ponto flutuante(casas decimais), booleano(verdadeiro ou falso)";
echo "<br/>";
$nome = 'HCode'; //variável tipo string
$site = 'www.hcode.com.br'; //variável tipo string
$ano = 1990; //variável tipo inteiro
$salario = 5500.98; //variável tipo ponto flutuante
$bloqueado = false; //variável tipo boolean

echo "Fazer cursos na empresa $nome, fundada em $ano, site $site, podem render salarios a partir de $salario ou mais.  ";
echo "<br/>";
//////////////////////////////////////////////////
//variáveis do tipo composto: array e objeto/////
////////////////////////////////////////////////
//variável array
echo "/////////////////////////////////////////////";
echo "<br/>";
echo "<br/>";
echo "variáveis do tipo composto: array e objeto.";
echo "<br/>";
echo "No exemplo abaixo criamos um array de 3 frutas (abacaxi, laranja e manga).";
echo "<br/>";
echo "E o indice escolhido foi o 2 e retornou a Manga porque os Arrays iniciam pelo índice zero, ou seja, abacaxi(0), laranja(1), manga(2)";
echo "<br/>";
$frutas = array("Abacaxi","Laranja","Manga");
echo "<br/>";
echo $frutas[2].'.' . ' ' . 'Apareceu manga porque ela é a posição 2 do array';
echo "<br/>";
echo "<br/>";
echo "/////////////////////////////////////////////";
echo "<br/>";
//////////////////////////////////////////////////
//variável objeto
$nascimento = new datetime();
var_dump($nascimento);
echo "<br/>";
echo 'resultado do vardump no objeto da classe datetime';
echo "<br/>";
echo "vardump serve para mostrar todas informações do objeto em uso";
echo "<br/>";
///////////////////////////////////////////////////////////////

echo "/////////////////////////////////////////////////////";
echo "<br/>";
echo "<br/>";
echo "agora os tipos especiais que são RESOURCE e NULL";
echo "<br/>";
echo "<br/>";

//Variável do tipo resource
$arquivo = fopen("exemplo-02.php", "r");
//var_dump($arquivo);

//Variável tipo NULL

$nulo = NULL //nulo é ausencia de valor. não existe. a variável se torna nula quando é destruída com o comando unset por exemplo.

$vazio = "" //vazio é um endereço na memória ainda sem informação. no vazio é possível inserir um valor a qualquer momento.

?>
