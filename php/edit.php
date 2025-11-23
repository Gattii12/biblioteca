<?php
include "db.php";

$id = $_GET['id'];

$sql = "SELECT * FROM jogos WHERE id=$id";
$result = $conn->query($sql);
$jogo = $result->fetch_assoc();

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $titulo = $_POST['titulo'];
    $genero = $_POST['genero'];
    $plataforma = $_POST['plataforma'];
    $ano = $_POST['ano'];
    $descricao = $_POST['descricao'];

    $sql = "UPDATE jogos SET
            titulo='$titulo',
            genero='$genero',
            plataforma='$plataforma',
            ano='$ano',
            descricao='$descricao'
            WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Jogo atualizado com sucesso!'); window.location='index.php';</script>";
    } else {
        echo "<script>alert('Erro ao atualizar jogo'); window.location='index.php';</script>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Editar Jogo</title>
</head>
<body>

<h1>Editar Jogo</h1>

<form method="POST">
    Título: <input type="text" name="titulo" value="<?= $jogo['titulo'] ?>" required><br><br>

    Gênero:
    <input type="text" name="genero" value="<?= $jogo['genero'] ?>" required><br><br>

    Plataforma:
    <input type="text" name="plataforma" value="<?= $jogo['plataforma'] ?>" required><br><br>

    Ano:
    <input type="number" name="ano" value="<?= $jogo['ano'] ?>" required><br><br>

    Descrição:<br>
    <textarea name="descricao" rows="4"><?= $jogo['descricao'] ?></textarea><br><br>

    <button type="submit">Salvar Alterações</button>
</form>

</body>
</html>
