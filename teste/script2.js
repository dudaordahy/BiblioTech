// ===== ELEMENTOS =====
const toggleBtn = document.getElementById('toggleBtn');
const sidebar = document.getElementById('sidebar');
const menuItems = document.querySelectorAll('.menu-item');
const pages = document.querySelectorAll('.page');

const listaLivros = document.getElementById('listaLivros');
const listaFavoritos = document.getElementById('listaFavoritos');

// ===== DADOS (simulação de banco de dados) =====
const livros = [
  { id: 1, nome: "Dom Casmurro" },
  { id: 2, nome: "1984" },
  { id: 3, nome: "O Pequeno Príncipe" },
  { id: 4, nome: "Harry Potter" }
];

let favoritos = []; // array para guardar favoritos

// ===== ABRIR/FECHAR SIDEBAR =====
toggleBtn.addEventListener('click', () => {
  sidebar.classList.toggle('ativo');
});

// ===== TROCA DE PÁGINAS =====
menuItems.forEach(item => {
  item.addEventListener('click', () => {

    // pega qual página clicar (ex: "livros")
    const pageId = item.getAttribute('data-page');

    // esconde todas as páginas
    pages.forEach(page => page.classList.remove('active'));

    // mostra a página escolhida
    document.getElementById(pageId).classList.add('active');
  });
});

// ===== MOSTRAR LIVROS =====
function mostrarLivros() {
  listaLivros.innerHTML = ""; // limpa antes de renderizar

  livros.forEach(livro => {

    // cria card
    const div = document.createElement('div');
    div.classList.add('livro');

    // conteúdo do card
    div.innerHTML = `
      <h3>${livro.nome}</h3>
      <button onclick="favoritar(${livro.id})">⭐ Favoritar</button>
    `;

    listaLivros.appendChild(div);
  });
}

// ===== FAVORITAR LIVRO =====
function favoritar(id) {

  // encontra o livro pelo ID
  const livro = livros.find(l => l.id === id);

  // adiciona aos favoritos se não estiver
  if (!favoritos.includes(livro)) {
    favoritos.push(livro);
  }

  mostrarFavoritos(); // atualiza tela
}

// ===== MOSTRAR FAVORITOS =====
function mostrarFavoritos() {
  listaFavoritos.innerHTML = "";

  favoritos.forEach(livro => {

    const div = document.createElement('div');
    div.classList.add('livro');

    div.innerHTML = `
      <h3>${livro.nome}</h3>
    `;

    listaFavoritos.appendChild(div);
  });
}

// ===== INICIALIZAÇÃO =====
mostrarLivros();