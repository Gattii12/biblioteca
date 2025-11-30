document.addEventListener("DOMContentLoaded", function() {
  const form = document.querySelector("form"); // ou use o ID do seu formulário, se tiver
  const emailInput = document.querySelector("#email");
  const cpfInput = document.querySelector("#cpf");

  form.addEventListener("submit", function(event) {
    const email = emailInput.value.trim();
    const cpf = cpfInput.value.trim();

    const emailRegex = /^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$/i;
    const cpfRegex = /^\d{3}\.\d{3}\.\d{3}-\d{2}$/;

    if (!emailRegex.test(email)) {
      alert("Por favor, insira um e-mail válido (ex: joao.silva@net.com)");
      event.preventDefault();
    }

    if (!cpfRegex.test(cpf)) {
      alert("Por favor, insira um CPF válido (ex: 123.456.789-10)");
      event.preventDefault();
    }
  });
});
