<?php
// Conexão com o banco de dados
$servername = "localhost";
$username = "root";
$password = "";
$database = "meu_banco";
$conn = new mysqli($servername, $username, $password, $database);

// Verifica se a conexão foi bem-sucedida
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

// Pega o ID da notícia e a ação (like)
$data = json_decode(file_get_contents('php://input'), true);
$noticia_id = $data['id'];

// Atualiza a quantidade de likes no banco de dados
$sql = "UPDATE noticias SET likes = likes + 1 WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $noticia_id);
$stmt->execute();

$stmt->close();
$conn->close();
?>
