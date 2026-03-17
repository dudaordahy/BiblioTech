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
            <a href="#" id="perfil"><img src="./teste/img/user.png" alt="perfil"></a>
        </div>
    </div>

    <div class="section">
        <h1 id="catalogo_txt">Catálogo</h1>
        <div class="catalogo">
            <div class="livro">
                <img src="./teste/img/capa-1.jpg" alt="poster">
                <div class="raking">
                    <div class="rating">
                        <span class="star" data-value="1">★</span>
                        <span class="star" data-value="2">★</span>
                        <span class="star" data-value="3">★</span>
                        <span class="star" data-value="4">★</span>
                        <span class="star" data-value="5">★</span>
                    </div>
                    <p id="resultado">(0)</p>
                </div>
                <p id="title" class="item">Vermelho, Branco e Sangue Azul</p>
            </div>
            <div class="livro">
                <img src="./teste/img/capa-2.jpg" alt="poster">
                <div class="raking">
                    <div class="rating">
                        <span class="star" data-value="1">★</span>
                        <span class="star" data-value="2">★</span>
                        <span class="star" data-value="3">★</span>
                        <span class="star" data-value="4">★</span>
                        <span class="star" data-value="5">★</span>
                    </div>
                    <p id="resultado">(0)</p>
                </div>
                <p id="title" class="item">Harry Potter e A Pedra Filosofal</p>
            </div>
            <div class="livro">
                <img src="./teste/img/capa-3.jpg" alt="poster">
                <div class="raking">
                    <div class="rating">
                        <span class="star" data-value="1">★</span>
                        <span class="star" data-value="2">★</span>
                        <span class="star" data-value="3">★</span>
                        <span class="star" data-value="4">★</span>
                        <span class="star" data-value="5">★</span>
                    </div>
                    <p id="resultado">(0)</p>
                </div>
                <p id="title" class="item">Romeu e Julieta</p>
            </div>
            <div class="livro">
                <img src="./teste/img/capa-4.jpg" alt="poster">
                <div class="raking">
                    <div class="rating">
                        <span class="star" data-value="1">★</span>
                        <span class="star" data-value="2">★</span>
                        <span class="star" data-value="3">★</span>
                        <span class="star" data-value="4">★</span>
                        <span class="star" data-value="5">★</span>
                    </div>
                    <p id="resultado">(0)</p>
                </div>
                <p id="title" class="item">A Guerra dos Tronos</p>
            </div>
            <div class="livro">
                <img src="./teste/img/capa-5.jpg" alt="poster">
                <div class="raking">
                    <div class="rating">
                        <span class="star" data-value="1">★</span>
                        <span class="star" data-value="2">★</span>
                        <span class="star" data-value="3">★</span>
                        <span class="star" data-value="4">★</span>
                        <span class="star" data-value="5">★</span>
                    </div>
                    <p id="resultado">(0)</p>
                </div>
                <p id="title" class="item">É Assim que Acaba</p>
            </div>
            <div class="livro">
                <img src="./teste/img/capa-6.jpg" alt="poster">
                <div class="raking">
                    <div class="rating">
                        <span class="star" data-value="1">★</span>
                        <span class="star" data-value="2">★</span>
                        <span class="star" data-value="3">★</span>
                        <span class="star" data-value="4">★</span>
                        <span class="star" data-value="5">★</span>
                    </div>
                    <p id="resultado">(0)</p>
                </div>
                <p id="title" class="item">Amor e Gelato</p>
            </div>
            <div class="livro">
                <img src="./teste/img/capa-7.jpg" alt="poster">
                <div class="raking">
                    <div class="rating">
                        <span class="star" data-value="1">★</span>
                        <span class="star" data-value="2">★</span>
                        <span class="star" data-value="3">★</span>
                        <span class="star" data-value="4">★</span>
                        <span class="star" data-value="5">★</span>
                    </div>
                    <p id="resultado">(0)</p>
                </div>
                <p id="title" class="item">Os Sete Maridos de Eveliyn Hugo</p>
            </div>
            <div class="livro">
                <img src="./teste/img/capa-8.jpg" alt="poster">
                <div class="raking">
                    <div class="rating">
                        <span class="star" data-value="1">★</span>
                        <span class="star" data-value="2">★</span>
                        <span class="star" data-value="3">★</span>
                        <span class="star" data-value="4">★</span>
                        <span class="star" data-value="5">★</span>
                    </div>
                    <p id="resultado">(0)</p>
                </div>
                <p id="title" class="item">O Morro dos Ventos Uivantes</p>
            </div>
            <div class="livro">
                <img src="./teste/img/capa-9.jpg" alt="poster">
                <div class="raking">
                    <div class="rating">
                        <span class="star" data-value="1">★</span>
                        <span class="star" data-value="2">★</span>
                        <span class="star" data-value="3">★</span>
                        <span class="star" data-value="4">★</span>
                        <span class="star" data-value="5">★</span>
                    </div>
                    <p id="resultado">(0)</p>
                </div>
                <p id="title" class="item">Veríth</p>
            </div>
            <div class="livro">
                <img src="./teste/img/capa-10.jpg" alt="poster">
                <div class="raking">
                    <div class="rating">
                        <span class="star" data-value="1">★</span>
                        <span class="star" data-value="2">★</span>
                        <span class="star" data-value="3">★</span>
                        <span class="star" data-value="4">★</span>
                        <span class="star" data-value="5">★</span>
                    </div>
                    <p id="resultado">(0)</p>
                </div>
                <p id="title" class="item">Por Lugares Incríveis</p>
            </div>
            <div class="livro">
                <img src="./teste/img/capa-11.jpg" alt="poster">
                <div class="raking">
                    <div class="rating">
                        <span class="star" data-value="1">★</span>
                        <span class="star" data-value="2">★</span>
                        <span class="star" data-value="3">★</span>
                        <span class="star" data-value="4">★</span>
                        <span class="star" data-value="5">★</span>
                    </div>
                    <p id="resultado">(0)</p>
                </div>
                <p id="title" class="item">Pequeno Príncipe</p>
            </div>
            <div class="livro">
                <img src="./teste/img/capa-12.jpg" alt="poster">
                <div class="raking">
                    <div class="rating">
                        <span class="star" data-value="1">★</span>
                        <span class="star" data-value="2">★</span>
                        <span class="star" data-value="3">★</span>
                        <span class="star" data-value="4">★</span>
                        <span class="star" data-value="5">★</span>
                    </div>
                    <p id="resultado">(0)</p>
                </div>
                <p id="title" class="item">O Duque e Eu</p>
            </div>
        </div>
    </div>
    <script src="./teste/script.js"></script>
</body>
</html>