<?php
require 'conexao.php';
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $noticia_id = (int) $_POST['noticia_id'];
    $comentario = trim($_POST['comentario']);

    // Pega o nome do usuário logado
    if (!isset($_SESSION['usuario'])) {
        header('Location: login.php');
        exit;
    }
    $nome_usuario = $_SESSION['usuario']['nome'];

    if (!empty($comentario)) {
        $stmt = $pdo->prepare("INSERT INTO comentarios (noticia_id, nome_usuario, comentario, data_comentario) VALUES (?, ?, ?, NOW())");
        $stmt->execute([$noticia_id, $nome_usuario, $comentario]);
    }
}

header('Location: noticia.php?id=' . $noticia_id);
exit;
