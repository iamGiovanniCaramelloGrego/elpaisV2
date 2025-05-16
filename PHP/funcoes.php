<?php
$mysqli = new mysqli("localhost", "root", "", "meu_banco");

if ($mysqli->connect_error) {
    die("Falha na conexão: " . $mysqli->connect_error);
}

function getLikes($noticia_id) {
    global $mysqli;
    $sql = "SELECT COUNT(*) as total FROM likes WHERE noticia_id = ?";
    $stmt = $mysqli->prepare($sql);
    $stmt->bind_param("i", $noticia_id);
    $stmt->execute();
    $result = $stmt->get_result()->fetch_assoc();
    return $result['total'];
}
?>
