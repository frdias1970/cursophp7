<?php
/* Escopo de variáveis. variáveis criadas fora da função não são exibidas por esta função, a menos que se declare uma nova variável dentro da função, ou torne ela Global. (Global $nome*/

$nome = "Glaucio";

function teste() {
Global $nome;
echo " nome=Glaucio, é uma variável criada fora da função e por isso exibirá o NOTICE conforme linha abaixo.";
echo "<br/>";
echo "Notice: Undefined variable: nome in D:\xampp\htdocs\cursophp7\variaveis\exemplo-05.php on line 9";
echo "<br/>";
echo "Precisamos declará-la globalmente (Global nomedavariável;)dentro da função e teremos o resultado esperado na linha abaixo.";
echo "<br/>";
echo $nome . ": <strong>Glaucio</strong> é o resultado correto, após a declaração Global DENTRO da função teste";
}

//function teste2(){

//	$nome = "João";
//	echo $nome . " é uma variável de mesmo nome da Global, com conteúdo diferente, porém declarada somente dentro da função teste2.";
//}
teste();
echo "<br/>";
//teste2();
echo "<br/>";
echo "Escopo de variáveis são criados para definir se as mesmas funcionarão somente dentro de cada função, ou se forem criadas fora das funções terão que ser declaradas globalmente.";

?>