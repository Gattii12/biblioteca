const botaoTema = document.getElementById("botao-tema");
const temaLink = document.getElementById("tema-css");

function aplicarTema(tema) {
  temaLink.href = `css/tema_${tema}.css`;
  localStorage.setItem("tema", tema);
}

botaoTema.addEventListener("click", () => {
  const temaAtual = localStorage.getItem("tema") || "claro";
  const novoTema = temaAtual === "claro" ? "escuro" : "claro";
  aplicarTema(novoTema);
});

document.addEventListener("DOMContentLoaded", () => {
  const temaSalvo = localStorage.getItem("tema") || "claro";
  aplicarTema(temaSalvo);
});
