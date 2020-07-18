<?php
$anoNascimento = 1970;
$nome = "Francisco";
$sobrenome = "Dias";
$filha = "Laura Leite Dias";
$nomeCompleto = $nome . " " . $sobrenome;

echo "concatenação de palavras é feita usando o . (ponto).Para ter um espaço entre as palavras é preciso digitar aspas com um espaço entre elas,";
echo "<br/>";
echo "e após, colocar o . (ponto) para concatenar com o restante do texto. No exemplo abaixo foram concatenados nome, sobrenome e data de nascimento.";
echo "<br/>";
echo "==========================================================================================================";
echo "<br/>";
echo $nomeCompleto ." " . "nasceu em" . " " . $anoNascimento;
echo "<br/>";
echo "==========================================================================================================";
echo "<br/>";
echo "<br/>";
echo "Neste outro exemplo abaixo foi usada as variáveis nomecompleto e filha.";
echo "<br/>";
echo "e o nome da filha de $nomeCompleto é" . " " . $filha;
echo "<br/>";
echo "==========================================================================================================";
echo "<br/>";
echo "a concatenação também pode usar o sinal de +. Porém se a variável tiver valores alfanumericos, pode haver conflito.";
echo "<br/>";

$somabizarra1 = 'JOAO13';
$somabizarra2 = 'MARIA12';
echo $somabizarra1 + " " + $somabizarra2;
echo "<br/>";
echo "==========================================================================================================";
echo "<br/>";
echo "<br/>";
echo "O UNSET é usado para descarregar uma variável qualquer da memória quando ela não é mais necessária em alguns casos. ";
echo "<br/>";
echo "UsaR o UNSET para descarregar a variável (nome) da memória, vai gerar o aviso abaixo, se tentar exibí-la. ";
//Notice: Undefined variable: nome in D:\xampp\htdocs\cursophp7\variaveis\exemplo-02.php on line 17
unset ($nome); // unset é usado para descarregar a variável da memória, ou seja, ela não poderá mais ser usada.
echo "$nome";
echo "==========================================================================================================";
//exit;
echo "<br/>";
echo "O ISSET vai verificar o status da variável.";
echo "<br/>";
echo "Usar o comando if (isset(nome)) para verificar se a mesma foi descarregada da memória." ;
echo "<br/>"; 
echo "Se estiver carregada, vai mostrar o nome, senão vai ficar em branco. Não terá o aviso padrão.";
if (isset($nome)) {
echo "$nome";
}
echo "<br/>";
echo "Se o comando UNSET for comentado ou apagado do código, o nome será visualizado, o que não é o caso aqui.";
echo "<br/>";
// "Usando o ISSET com o UNSET COMENTADO. Vai aparecer o nome novamente, pois verificou a existencia e carregou novamente na memória.";
echo "==========================================================================================================";


?>