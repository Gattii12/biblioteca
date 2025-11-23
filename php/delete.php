<?php
include "db.php";

$id = $_GET['id'];

$sql = "DELETE FROM jogos WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    echo "<script>alert('Jogo deletado com sucesso!'); window.location='index.php';</script>";
} else {
    echo "<script>alert('Erro ao deletar jogo'); window.location='index.php';</script>";
}
?>
