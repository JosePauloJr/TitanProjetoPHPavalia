<?php
//Responsavel por conectar o banco de dados, 'chamado banco_projeto'
$servername = "localhost"; // Servidor do banco de dados
$username = "usuario";     // Nome de usuário do banco de dados
$password = "senha";       // Senha do banco de dados
$dbname = "banco_projeto"; // Nome do banco de dados

// Criar conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexão
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}
?>
