<?php
// update.php
require 'db.php';

if($_SERVER['REQUEST_METHOD'] !== 'POST'){
    http_response_code(405);
    exit('Método não permitido');
}

$id = isset($_POST['id']) ? (int)$_POST['id'] : 0;
$imagem = $_POST['imagem'] ?? null;
$nome = trim($_POST['nome'] ?? '');
$plataforma = $_POST['plataforma'] ?? null;
$ano = $_POST['ano'] !== '' ? (int)$_POST['ano'] : null;
$preco = $_POST['preco'] !== '' ? (float)$_POST['preco'] : null;

if($id <= 0 || $nome === ''){
    echo "<script>alert('Dados inválidos'); window.history.back();</script>";
    exit;
}

try{
    $stmt = $pdo->prepare("UPDATE jogos SET imagem=?, nome=?, plataforma=?, ano=?, preco=? WHERE id=?");
    $stmt->execute([$imagem,$nome,$plataforma,$ano,$preco,$id]);
    echo "<script>alert('Registro atualizado com sucesso!'); window.location.href = 'list.php';</script>";
} catch (Exception $e){
    echo "<script>alert('Erro ao atualizar: ".addslashes($e->getMessage())."'); window.history.back();</script>";
}
