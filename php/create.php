<?php
include "db.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $titulo = $_POST['titulo'];
    $genero = $_POST['genero'];
    $plataforma = $_POST['plataforma'];
    $ano = $_POST['ano'];
    $descricao = $_POST['descricao'];

    $sql = "INSERT INTO jogos (titulo, genero, plataforma, ano, descricao)
            VALUES ('$titulo', '$genero', '$plataforma', '$ano', '$descricao')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Jogo adicionado com sucesso!'); window.location='index.php';</script>";
    } else {
        echo "<script>alert('Erro ao adicionar jogo'); window.location='index.php';</script>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Adicionar Jogo</title>
</head>
<body>

<h1>Adicionar Novo Jogo</h1>

<form method="POST">
    Título: <input type="text" name="titulo" required><br><br>

    Gênero:
    <input type="text" name="genero" required><br><br>

    Plataforma:
    <input type="text" name="plataforma" required><br><br>

    Ano:
    <input type="number" name="ano" required><br><br>

    Descrição:<br>
    <textarea name="descricao" rows="4"></textarea><br><br>

    <button type="submit">Salvar</button>
</form>

</body>
</html>
