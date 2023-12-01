<?php

$valor_total = 300.01;
$nome_limpo = true;

$frase = "Você comprou o valor R$ "; 
// .str_replace(".",",",$valor_total) . ' Reais';
$frase .= str_replace(".",",",$valor_total)." reais";

echo $frase;

// OPERADORES PHP
// == != > < >= <= === !===
// igual, diferente, maior, menor, maior igual, menor igual, identico, não identico

// $saldo = '31';
echo '<hr>';

$limite = '300';

// var_dump($saldo!=$valor_total);

// operadores lógicos
// vão verificar se dois, tres, quatro ou cinco condições se combinam
// 
// and - só vai ser verdade se tudo for verdadeiro
// or ou - se tiver um verdadeiro será verdade.

// var_dump($saldo >= $valor_total || $nome_situacao == 'limpo');

// var_dump($limite >= $valor_total && $nome_limpo);

$resultado = 5 + (5 * 3) ** 2;
var_dump($resultado);

$autorizacao = $limite >= $valor_total
                && $nome_limpo || $limite /2 >= $valor_total;

var_dump($autorizacao);