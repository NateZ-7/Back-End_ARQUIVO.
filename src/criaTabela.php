<?php
require_once 'conecta.php';//Carregar o arquivo de conexão com o banco de dados.
$sql = "CREATE TABLE IF NOT EXISTS produtos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    preco DECIMAL(10,2) NOT NULL,
    quantidade INT DEFAULT 0
)";//Coloca os comandos de SQL.
$pdo->exec($sql);
//exec() é um método do PDO que executa uma consulta SQL e retorna o número de linhas afetadas. Ele é usado para consultas que não retornam resultados, como CREATE, INSERT, UPDATE e DELETE.
echo "<h1>Tabela criada com sucesso!</h1>";
//header("Location: relatorio.php?msg=tabela_pronta");v