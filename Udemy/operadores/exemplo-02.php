<?php
$ValorTotal = 0;

$ValorTotal += 100;
$ValorTotal += 25;
$ValorTotal *= .15;

echo 'João comprou uma bermuda e ganhou 15% de desconto. Qual foi o valor do desconto? Resultado: ' . $ValorTotal;
echo "<br>";
echo "///////////////////////////////////////////////////" ;
echo "<br>";
$ValorComDesconto = 125 - $ValorTotal;
echo 'Subtraído o desconto, quanto resta pagar?  Resultado : ' . $ValorComDesconto;
?>