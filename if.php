<?php

if(isset($_GET['nome'])){
    echo "Você informou o seu nome, {$_GET['nome']}";

    if(isset($_GET['admin']))
    {
            echo "(Administrador)";
    }
}
// elseif(isset($_GET['admin'])){
// echo "Você está acessando como administrador";
// }

else{
    echo "Você está acessando como convidado.";
};

$tipo_user = isset($_GET['admin']) ? '(Administrador)' : '(Usuário)';

$cargo = 'F'; // CX, AD, GA,CO 
echo '<hr>';
// if($cargo == 'GA') {
//     echo 'Garçom';
// }

switch($cargo){
    case 'F':
        echo 'Funcionario';
        break;
    case 'GA' :
        echo 'Garçom';
        break;
    case 'CX' :
        echo 'Caixa';
        break;
    case 'AD' :
        echo 'Administração';
        break;
    case 'CO' :
        echo 'Cozinheiro';
        break;
    default:
        echo 'Cliente';
        break;
}