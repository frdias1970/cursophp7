<?php
$a =30;
$b = 55.0;
echo "Foram criadas as variáveis a=30 e b=55 para serem comparadas se são iguais, maiores ou menores uma da outra.<br>";
echo "Seus tipos de dados também serão comparados.<br>";
var_dump($a > $b);
echo "o sinal > verifica se variavel a é maior que b<br>";
var_dump($a < $b)  ;
echo "o sinal < verifica se variavel a é menor que b<br>";
//var_dump($a = $b);
//echo "o sinal = vai atribuir o valor de b(55) para a variável a(que até então era 30).<br>";
var_dump($a == $b);
echo "Para verificar a igualdade de valores usa-se == (02 sinais de igual)<br>";
var_dump($a === $b);
echo "Para verificar a igualdade de identidade(valor e tipo) usam-se === (03 sinais de igual)<br>";
var_dump($a != $b);
echo "O sinal != vai verificar se os valores são diferentes.<br>";
var_dump($a !== $b);
echo "O sinal !== vai verificar se os valores e o tipo de dados são diferentes.<br>";

?>