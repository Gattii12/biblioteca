<?php
// contato.php
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <title>Contato</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <nav>
    <a href="index.php">Início</a>
    <a href="list.php">Catálogo</a>
    <a href="contato.php">Contato</a>
    <a href="equipe.php">Equipe</a>
  </nav>

  <main>
    <h1>Fale Conosco</h1>
    <form onsubmit="this.reset(); alert('Mensagem enviada (simulada).'); return false;">
      <label>Nome:</label>
      <input type="text" required><br>

      <label>E-mail:</label>
      <input type="email" id="id_email" required><br>

      <label>Assunto:</label>
      <input type="text" required><br>

      <label>Mensagem:</label><br>
      <textarea rows="5" required></textarea><br>

      <button type="submit">Enviar</button>
    </form>
  </main>

<script src="js/validacao.js"></script>

<label for="email">E-mail:</label>
<input type="text" id="email" name="email">

<label for="cpf">CPF:</label>
<input type="text" id="cpf" name="cpf">

<link id="tema-css" rel="stylesheet" href="css/tema_claro.css">

<button id="botao-tema">🌗 Alternar Tema</button>

<script src="js/tema.js"></script>

</body>
</html>
