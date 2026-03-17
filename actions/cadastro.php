<?php 

include_once '../includes/conexao.php';

// captura os dados
$nome_aluno = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];

$sql = "INSERT INTO alunos (nome_aluno, email, senha) VALUES ('{$nome_aluno}', '{$email}', '{$senha}')";
// executar no banco
mysqli_query($conexao,$sql);

// redireciona
header('Location: ../pagina_inicial.php');
exit();
?>