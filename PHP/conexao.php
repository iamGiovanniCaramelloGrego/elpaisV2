<?php
$servername = "localhost"; // Ou o nome do seu servidor
$username = "root";         // Usuário do MySQL
$password = "";             // Senha do MySQL (normalmente vazia no XAMPP)
$database = "meu_banco";       // Nome do seu banco de dados

// Criar conexão
$conn = new mysqli($servername, $username, $password, $database);

// Verificar conexão
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}


?>
