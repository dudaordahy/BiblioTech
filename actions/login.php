<?php 

include_once '../includes/conexao.php';

// captura os dados
$email= $_POST['email'];
$senha = $_POST['senha'];

$sql = "SELECT email, senha FROM alunos WHERE email = '{$email}' AND senha = '{$senha}'";

// executar o banco de dados
$resultado = mysqli_query($conexao, $sql);

// validacao do acesso
if($resultado->num_rows > 0){
    // validacao do usuario - cria a sessao
    $_SESSION['Usuario'] =  mysqli_fetch_assoc($resultado);
    header('Location: ../pagina_inicial.php');
    print_r($_SESSION);
}else{
    header('Location: ./pagina_cadastro.php?msg=semusuario');
}
exit();
?>