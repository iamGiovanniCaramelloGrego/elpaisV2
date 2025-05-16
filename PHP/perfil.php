<?php
include("funcoes.php");

if (!isset($_GET['id'])) {
    header("Location: home.php");
    exit();
}

$noticia_id = intval($_GET['id']);

// Aqui você coloca os conteúdos das notícias manualmente
$noticias = [
    1 => "A simulação da ONU é um evento educacional...",
    2 => "Na manhã de 12 de março, começaram os Jogos da ONU 2025...",
    3 => "As datas e eventos dos Jogos da ONU 2025 foram divulgados...",
    4 => "Integrantes da mesa durante o evento da ONU no CTPM..."
];

$titulo = [
    1 => "ONU CTPM",
    2 => "Sorteio dos Países e Imprensas da ONU",
    3 => "Divulgação de datas e Eventos",
    4 => "Integrantes da mesa"
];

?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <title><?php echo $titulo[$noticia_id]; ?></title>
  <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
  <h1><?php echo $titulo[$noticia_id]; ?></h1>
  <p><?php echo $noticias[$noticia_id]; ?></p>

  <hr>

  <h3>Comentários</h3>

  <?php
  $sql = "SELECT texto, data_comentario FROM comentarios WHERE noticia_id = ? ORDER BY data_comentario DESC";
  $stmt = $mysqli->prepare($sql);
  $stmt->bind_param("i", $noticia_id);
  $stmt->execute();
  $comentarios = $stmt->get_result();

  while($comentario = $comentarios->fetch_assoc()):
  ?>
    <div class="card mb-3">
      <div class="card-body">
        <p><?php echo htmlspecialchars($comentario['texto']); ?></p>
        <small class="text-muted"><?php echo $comentario['data_comentario']; ?></small>
      </div>
    </div>
  <?php endwhile; ?>

  <hr>

  <h4>Adicionar um comentário</h4>
  <form action="comentar.php" method="post">
    <input type="hidden" name="noticia_id" value="<?php echo $noticia_id; ?>">
    <div class="mb-3">
      <textarea name="texto" class="form-control" rows="3" required></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Comentar</button>
  </form>

</div>
</body>
</html>
