<?php 
include_once './includes/conexao.php';
include_once './includes/logado.php';
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./teste/style.css">
    <title>Document</title>
</head>
<body>
    <div class="sidebar">
        <img src="./teste/img/logo.png" alt="logo">

        <ul>
            <li>🏠 Início</li>
            <li>⭐ Favoritos</li>
            <li>📚 Minha Biblioteca</li>
        </ul>

        <h3>Categorias</h3>
        <ul>
            <li>❤️ Romance</li>
            <li>🧬 Ficção Científica</li>
            <li>📖 História</li>
            <li>💻 Tecnologia</li>
        </ul>

        <h3>Conta</h3>
        <ul>
            <li>👤 Perfil</li>
            <li>⚙️ Configurações</li>
            <li>🚪 Sair</li>
        </ul>
    </div>

    <div class="header">
        <div class="search">       
            <input type="text" id="pesquisa" placeholder="Digite o nome do livro">
            <img src="./teste/img/search.png" alt="lupa">
        </div>
        <div class="container_perfil">
            <button><img src="./teste/img/user.png" alt="perfil"></button>
        </div>
    </div>

    <div class="section">
        <h1 id="catalogo_txt">Catálogo</h1>
        <div class="catalogo">

            <?php 
            $sql = "SELECT * FROM livros";
            $resultado = mysqli_query($conexao, $sql);

            if (mysqli_num_rows($resultado) > 0) {
                while($row = mysqli_fetch_assoc($resultado)) {

                    echo '<div class="livro">';

                    if($row['reservado']){
                        echo '<div class="indisponivel">';
                        echo '<img src="'.$row['capa_livro'].'">';
                        echo '<p id="title" class="item">'.$row['nome_livro'].' (Indisponível)</p>';
                        echo '</div>';
                    } else {
                        echo '<a href="./actions/reservas.php?idLivro='.$row['id_livro'].'">';
                        echo '<img id="capa" src="'.$row['capa_livro'].'">';
                        echo '<p id="title" class="item">'.$row['nome_livro'].'</p>';
                        echo '</a>';
                    }
                    
                    echo '</div>';
                }
            } else{
                echo "0 resultados";
            }
            ?>
        </div>
    </div>


    <script src="./teste/script.js"></script>
</body>
</html>