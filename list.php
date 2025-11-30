<?php
// list.php
require 'db.php';

// buscar todos os jogos
$stmt = $pdo->query("SELECT * FROM jogos ORDER BY id DESC");
$jogos = $stmt->fetchAll();
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <title>Catálogo</title>
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
    <h1>Jogos Clássicos</h1>

    <p><a class="btn" href="create_form.php">➕ Adicionar Novo</a></p>

    <table>
      <thead>
        <tr>
          <th>Imagem</th>
          <th>Nome</th>
          <th>Plataforma</th>
          <th>Ano de Lançamento</th>
          <th>Preço</th>
          <th>Ações</th>
        </tr>
      </thead>

      <tbody>
        <?php foreach($jogos as $j): ?>
        <tr>
          <td>
            <?php if($j['imagem']): ?>
              <img src="<?=htmlspecialchars($j['imagem'])?>" width="100">
            <?php else: ?>
              —
            <?php endif; ?>
          </td>

          <td><?=htmlspecialchars($j['nome'])?></td>
          <td><?=htmlspecialchars($j['plataforma'])?></td>
          <td><?=htmlspecialchars($j['ano'])?></td>
          <td><?= $j['preco'] !== null ? number_format($j['preco'],2,',','.') : '-' ?></td>

          <td>
            <a href="edit_form.php?id=<?= $j['id'] ?>">✏️ Editar</a>
            &nbsp;|&nbsp;
            <a href="#" onclick="confirmDelete(<?= $j['id'] ?>)">🗑️ Deletar</a>
          </td>
        </tr>
        <?php endforeach; ?>
      </tbody>

    </table>
  </main>

<script src="js/carrega_dados.js"></script>
<link id="tema-css" rel="stylesheet" href="css/tema_claro.css">
<button id="botao-tema">🌗 Alternar Tema</button>
<script src="js/tema.js"></script>

<script>
function confirmDelete(id){
  if(!confirm('Tem certeza que deseja deletar este registro?')) return;

  fetch('delete.php?id='+id, { method:'DELETE' })
    .then(r => r.json())
    .then(resp => {
        alert(resp.message || (resp.success? 'Sucesso' : 'Erro'));
        if(resp.success) location.href = 'list.php';
    });
}
</script>

</body>
</html>
