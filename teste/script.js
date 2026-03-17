const estrelas = document.querySelectorAll('.star');
const resultado = document.getElementById('resultado');

let nota = 0;

estrelas.forEach((estrela) => {
  estrela.addEventListener('click', () => {
    nota = estrela.getAttribute('data-value');
    atualizarEstrelas(nota);
    resultado.textContent = "(" + nota + ")";
  });
});

function atualizarEstrelas(valor) {
  estrelas.forEach((estrela) => {
    estrela.classList.remove('ativo');
    if (estrela.getAttribute('data-value') <= valor) {
      estrela.classList.add('ativo');
    }
  });
}

const input = document.getElementById("pesquisa");
const itens = document.querySelectorAll(".item");
const livros = document.querySelectorAll(".livro");

input.addEventListener("keyup", function() {
    const texto = input.value.toLowerCase();

    itens.forEach(function(item) {
        const conteudo = item.textContent.toLowerCase();

        if (conteudo.includes(texto)) {
            item.style.display = "flex";
        } else {
            item.style.display = "none";
        }
    });
    livros.forEach(function(item) {
      const conteudo = item.textContent.toLowerCase();

      if (conteudo.includes(texto)) {
          item.style.display = "flex";
      } else {
          item.style.display = "none";
      }
  });
});