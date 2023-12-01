<?php 

// nome da aplicação
defined('APPLICATION_NAME') || define('APPLICATION_NAME','Vivendo de PHP');
// echo APPLICATION_NAME;

// tipo de aplicação produção, testes, development
// local da aplicação no hd;

// $contador = 'Paulo';
// $usuario = 15;
// $usuario = 7.5;
// $usuario = true;
// $usuario = null;

$valor1 = 2;
$valor2 = 3;

$resultado = $valor1 + $valor2;
// $resultado = $resultado + $valor2;
$resultado += $valor2;
$resultado = $valor1 - $valor2;
$resultado -= $valor1;
$resultado = $valor1 * $valor2;
$resultado *= $valor2;
$resultado = $valor1 / $valor2;
$resultado /= $valor2;
$resultado = $valor1 ** $valor2;
$resultado **= $valor1;
$resultado = $valor2 % $valor1;
$resultado %= $valor1;


echo "<hr>";
var_dump($resultado);