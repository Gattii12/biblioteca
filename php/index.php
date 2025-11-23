<?php
include "db.php";

$sql = "SELECT * FROM jogos";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Biblioteca de Jogos</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<h1>🎮 Biblioteca de Jogos</h1>

<a href="create.php">➕ Adicionar Novo Jogo</a>

<table border="1" cellpadding="10">
    <tr>
        <th>ID</th>
        <th>Título</th>
        <th>Gênero</th>
        <th>Plataforma</th>
        <th>Ano</th>
        <th>Descrição</th>
        <th>Ações</th>
    </tr>

    <?php while($jogo = $result->fetch_assoc()) { ?>
    <tr>
        <td><?= $jogo['id'] ?></td>
        <td><?= $jogo['titulo'] ?></td>
        <td><?= $jogo['genero'] ?></td>
        <td><?= $jogo['plataforma'] ?></td>
        <td><?= $jogo['ano'] ?></td>
        <td><?= $jogo['descricao'] ?></td>
        <td>
            <a href="edit.php?id=<?= $jogo['id'] ?>">Editar</a> |
            <a href="delete.php?id=<?= $jogo['id'] ?>"
                onclick="return confirm('Tem certeza que deseja deletar este jogo?')">Deletar</a>
        </td>
    </tr>
    <?php } ?>

</table>

</body>
</html>
