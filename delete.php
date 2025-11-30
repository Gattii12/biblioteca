<?php
// delete.php
require 'db.php';

if($_SERVER['REQUEST_METHOD'] === 'DELETE'){
    $id = isset($_GET['id']) ? (int)$_GET['id'] : 0;
    header('Content-Type: application/json; charset=utf-8');

    if($id <= 0){
        echo json_encode(['success'=>false,'message'=>'ID inválido']);
        exit;
    }

    try{
        $stmt = $pdo->prepare("DELETE FROM jogos WHERE id = ?");
        $stmt->execute([$id]);
        if($stmt->rowCount() > 0){
            echo json_encode(['success'=>true,'message'=>'Registro deletado com sucesso.']);
        } else {
            echo json_encode(['success'=>false,'message'=>'Registro não encontrado.']);
        }
    } catch (Exception $e){
        echo json_encode(['success'=>false,'message'=>'Erro: '.$e->getMessage()]);
    }
    exit;
}

http_response_code(405);
echo json_encode(['success'=>false,'message'=>'Método não permitido']);
