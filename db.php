<?php
// db.php
$DB_HOST = "localhost";
$DB_NAME = "amgames_db";
$DB_USER = "root";    // ALTERE para seu usuário
$DB_PASS = "";        // ALTERE para sua senha

try {
    $pdo = new PDO(
        "mysql:host=$DB_HOST;dbname=$DB_NAME;charset=utf8mb4",
        $DB_USER,
        $DB_PASS,
        [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC]
    );
} catch (PDOException $e) {
    // Em ambiente de desenvolvimento mostre o erro; em produção logue e mostre mensagem genérica.
    die("Erro ao conectar no banco de dados: " . $e->getMessage());
}
