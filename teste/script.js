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
