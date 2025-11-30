<?php
// create_form.php
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <title>Adicionar Jogo</title>
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
    <h1>Incluir Novo Jogo</h1>
    <form id="createForm" action="create.php" method="POST">
      <label>Imagem (caminho):</label><br>
      <input type="text" name="imagem"><br>

      <label>Nome:</label><br>
      <input type="text" name="nome" required><br>

      <label>Plataforma:</label><br>
      <input type="text" name="plataforma"><br>

      <label>Ano:</label><br>
      <input type="number" name="ano"><br>

      <label>Preço:</label><br>
      <input type="number" step="0.01" name="preco"><br><br>

      <button type="submit">Enviar</button>
    </form>
  </main>
</body>
</html>
