<?php
// create.php
require 'db.php';

if($_SERVER['REQUEST_METHOD'] !== 'POST'){
    http_response_code(405);
    exit('Método não permitido');
}

$imagem = $_POST['imagem'] ?? null;
$nome = trim($_POST['nome'] ?? '');
$plataforma = $_POST['plataforma'] ?? null;
$ano = $_POST['ano'] !== '' ? (int)$_POST['ano'] : null;
$preco = $_POST['preco'] !== '' ? (float)$_POST['preco'] : null;

if($nome === ''){
    echo "<script>alert('O campo nome é obrigatório.'); window.history.back();</script>";
    exit;
}

try{
    $stmt = $pdo->prepare("INSERT INTO jogos (imagem,nome,plataforma,ano,preco) VALUES (?,?,?,?,?)");
    $stmt->execute([$imagem,$nome,$plataforma,$ano,$preco]);
    echo "<script>alert('Registro criado com sucesso!'); window.location.href = 'list.php';</script>";
} catch (Exception $e){
    echo "<script>alert('Erro ao criar registro: ".addslashes($e->getMessage())."'); window.history.back();</script>";
}
