<?php
// edit_form.php
require 'db.php';

$id = isset($_GET['id']) ? (int)$_GET['id'] : 0;
$stmt = $pdo->prepare("SELECT * FROM jogos WHERE id = ?");
$stmt->execute([$id]);
$j = $stmt->fetch();

if(!$j){
    echo "<script>alert('Registro não encontrado'); window.location.href='list.php';</script>";
    exit;
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <title>Editar Jogo</title>
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
    <h1>Editar Jogo</h1>
    <form id="editForm" action="update.php" method="POST">
      <input type="hidden" name="id" value="<?= $j['id'] ?>">

      <label>Imagem (caminho):</label><br>
      <input type="text" name="imagem" value="<?= htmlspecialchars($j['imagem']) ?>"><br>

      <label>Nome:</label><br>
      <input type="text" name="nome" required value="<?= htmlspecialchars($j['nome']) ?>"><br>

      <label>Plataforma:</label><br>
      <input type="text" name="plataforma" value="<?= htmlspecialchars($j['plataforma']) ?>"><br>

      <label>Ano:</label><br>
      <input type="number" name="ano" value="<?= htmlspecialchars($j['ano']) ?>"><br>

      <label>Preço:</label><br>
      <input type="number" step="0.01" name="preco" value="<?= htmlspecialchars($j['preco']) ?>"><br><br>

      <button type="submit">Enviar</button>
    </form>
  </main>
</body>
</html>
