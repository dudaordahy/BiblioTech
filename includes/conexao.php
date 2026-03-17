<?php 

session_start();

// config de acesso
$server = 'localhost';
$usuario = 'root';
$senha = '';
$dbname = 'bibliotech';

// conexão
$conexao = mysqli_connect($server, $usuario, $senha, $dbname);

?>