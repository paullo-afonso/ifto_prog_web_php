<?php

$clientes = array();
function addCliente($nome,$telefone,$tipo = 'Normal') {
    global $clientes;
    $clientes[] = array('nome'=> $nome, 'telefone' => $telefone, 'tipo' => $tipo);
}

function removeCliente($nome){
    global $clientes;
    foreach ($clientes as $key => $cliente) {
        if($cliente['nome'] == $nome){
            unset($clientes[$key]);
            break;
        }
    }
}

function printClientes(){
    global $clientes;
    foreach ($clientes as $key => $cliente) {
        print_r( (($cliente['tipo']=='vip')?'*':'').  
        $cliente['nome'] . ' - ' . $cliente['telefone']. '<br>');
    }
}

addCliente('Paulo', '99999999999', 'vip');
addCliente('Leticia', '99999999999');
addCliente('Gabriela', '99999999999');
addCliente('Felipe', '99999999999');
addCliente('Ana Clara', '99999999999', 'vip');

removeCliente('Paulo');
printClientes();