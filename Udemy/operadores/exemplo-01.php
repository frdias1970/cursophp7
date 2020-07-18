<?php
$nome = "João ";
$sobrenome = "Rangel";
$nomecompleto = $nome . $sobrenome;
$nome .= " esse texto foi adicionado à variável nome usando o .= após a variável.<br>";
echo "Exemplos de operadores: = . .= += -= *= <br>";
echo "O sinal de = é um dos operadores onde a variável será igual ao valor atribuido entre aspas. Ex:variávelnome = João.<br>";
echo $nome;
echo "O sinal de . é um dos operadores de concatenação. Serve para juntar conteudos variáveis ou não. Ex: variavelnome . variavelsobrenome . qualquer texto<br>";
$nomecompleto .= " qualquer texto";
echo $nomecompleto;
?>