<?php 
include_once './includes/conexao.php';
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./teste/cadastro.css">
    <title>BiblioTech</title>
</head>
<body>

    <div class="container">
        <h2 id="cadastro">Cadastro</h2>
        <form action="./actions/cadastro.php" method="post">
            <input type="text" name="nome" placeholder="Nome do aluno">
            <input type="email" name="email" placeholder="Email do aluno">
            <input type="password" name="senha" placeholder="Senha">
            <button type="submit">Enviar</button>
        </form>
    </div>
    
</body>
</html>