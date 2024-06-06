<?php
// Dados de conexão com o banco de dados
$servername = "localhost"; // Nome do servidor
$username = "Admin"; // Nome do usuário do MySQL
$password = "https://algo.muito.bom/"; // Senha do usuário do MySQL
$database = "aula10"; // Nome do banco de dados

// Criando a conexão
$conn = new mysqli($servername, $username, $password, $database);

// Verifica a conexão
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

// Outras operações com o banco de dados podem ser feitas aqui


?>