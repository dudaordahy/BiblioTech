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