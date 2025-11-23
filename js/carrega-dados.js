document.addEventListener("DOMContentLoaded", () => {
  fetch("dados.json")
    .then(response => response.json())
    .then(dados => {
      const tbody = document.querySelector("#tabela-dados tbody");

      dados.forEach(item => {
        const linha = document.createElement("tr");
        linha.innerHTML = `
          <td>${item.nome}</td>
          <td>${item.categoria}</td>
          <td>R$ ${item.preco.toFixed(2)}</td>
        `;
        tbody.appendChild(linha);
      });
    })
    .catch(err => console.error("Erro ao carregar dados:", err));
});
