<?php
$host = 'db';//Local onde fica o banco de dados.
$db = 'app_db';//Local onde será criado o banco de dados.
$user = 'app_user';//Local onde fica qual é o usuário do banco de dados.
$pass = 'app_pass';//Local onde fica a senha do usuário do banco de dados.
$dsn = "mysql:host=$host;dbname=$db;charset=utf8mb4";
// Qual o banco de dados, e quais suas configurações(dsn).
try {
    $pdo = new PDO($dsn, $user, $pass, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    ]);//PDO é o objeto de conexão com o banco de dados, e ele recebe as configurações do banco de dados, e as opções de configuração do PDO.
} catch (PDOException $e) {
    die("Erro de conexão: " . $e->getMessage());
}