<?php

$base = 5;
$potencia = 5;
$resultado = 1;

for($i = 1; $i <= $potencia; $i++){
    $resultado = $resultado * $base;
}


while($resultado++ < 1000){
    echo "while: $resultado<hr>";
}

do{
    echo "do-while: $resultado<hr>";
}while($resultado++ < 1000);

$clientes = array(
    array('nome'=>'Paulo','telefone'=>'99999999999'),
    array('nome'=>'Afonso','telefone'=>'99999999999'),
    array('nome'=>'Leticia','telefone'=>'99999999999'),
    'vip'=>array('nome'=>'Gabi','telefone'=>'99999999999')
);

// $clientes[] = 'Jessica';
// array_push($clientes, 'Leticia');

// $cliente = array_shift($clientes);

echo '<pre>';
// for($x=0; $x < count ($clientes); $x++){
//     print_r($clientes[$x]['nome']." --- ".$clientes[$x]['telefone'].'<br>');
// }

// while(count($clientes)>0){
//     $cliente = array_shift($clientes);
//     print_r($cliente['nome'].' --- '. $cliente['telefone']. '<br>');
// }

// foreach ($clientes as $key => $cliente) {
//     $divisao = '';
//     foreach ($cliente as $coluna){
//         print_r("$divisao$coluna");
//         $divisao = ' <---> ';
//     }
//     echo '<br>';
    
// }

// function somar($x, $y){
//     return $x + $y;
// }

// echo somar(5,8);

// function somar($x, $y){
//     echo $x + $y;
// }

// somar(5,8);

function addCliente($nome, $telefone, $tipo = 'Normal'){
    $clientes[] = array('nome'=> $nome, 'telefone' => $telefone, 'tipo' => $tipo );
}

