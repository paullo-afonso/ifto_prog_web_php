<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo Página</title>
</head>
<body>
    <?php if(isset($_GET['nome'])) : ?>
    <h1>Exemplo de uma página utilizando php</h1>
        Bem vindo <?= $_GET['nome'];?> 
        <?= (isset($_GET['admin']) ? '(Administrador)' : '(Usuário)') ?>
        <?php endif;?>
</body>
</html>