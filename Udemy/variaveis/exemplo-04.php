<?php
$nome = (int)$_GET["a"]; //o (int) converte o valor recebido para inteiro,númerico. Se não for setado nada, SEMPRE que o valor vier de GET ou POST, será TIPO STRING.
//unset $nome //descarregando a variável $nome
var_dump($nome); //verificando o tipo de variável recebida.
$ip = $_SERVER["REMOTE_ADDR"];
echo $ip;

?>