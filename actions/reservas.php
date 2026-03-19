<?php 
include_once '../includes/conexao.php';

$idAluno = $_SESSION['Usuario']['id_aluno'];
$idLivro = $_REQUEST['idLivro'];


$sql = "INSERT INTO `reservas` (`id_reserva`, `id_aluno`, `id_livro`) VALUES (NULL, '{$idAluno}', '{$idLivro}');";
mysqli_query($conexao, $sql);

$sqlAtualiza = "UPDATE livros SET reservado = 1 WHERE id_livro = {$idLivro}";
mysqli_query($conexao, $sqlAtualiza);

?>