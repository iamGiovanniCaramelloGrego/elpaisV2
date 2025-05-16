
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>EL PAÍS</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="../assets/img/world.png" rel="icon">
  <link href="../assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&family=EB+Garamond:ital,wght@0,400;0,500;0,600;0,700;0,800;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">



  <!-- Main CSS File -->
  <link href="../assets/css/main.css" rel="stylesheet">
</head>

<body class="index-page">

<header id="header" class="header d-flex align-items-center sticky-top">
  <div class="container position-relative d-flex align-items-center justify-content-between">

    <a href="../index.html" class="logo d-flex align-items-center me-auto me-xl-0">
      <img src="../assets/img/png-clipart-logo-font-brand-pubblica-amministrazione-el-pais-pai-text-logo.png" alt="">
    </a>

    <nav id="navmenu" class="navmenu">
      <ul>
        <li><a href="../index.html" class="active">Home</a></li>
        <li><a href="../about.html">Sobre</a></li>
        <li><a href="../contact.html">Contato</a></li>
        <li><a href="perfil.php">Perfil</a></li>
      </ul>
      <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
    </nav>

    <div class="header-social-links">
      <a href="https://www.instagram.com/ctpm.elpais/" class="instagram"><i class="bi bi-instagram"></i></a>
    </div>

  </div>
</header>

<main class="main">

<!-- Slider Section -->
<section id="slider" class="slider section dark-background">
  <div class="container" data-aos="fade-up" data-aos-delay="100">
    <div class="swiper init-swiper">


      <div class="swiper-wrapper">

        <div class="swiper-slide" style="background-image: url('../assets/img/IMG_8524.jpg');">
          <div class="overlay"></div>
          <div class="content"></div>
        </div>

        <div class="swiper-slide" style="background-image: url('../assets/img/IMG_8506.jpg');">
          <div class="overlay"></div>
          <div class="content"></div>
        </div>

        <div class="swiper-slide" style="background-image: url('../assets/img/IMG_8505.jpg');">
          <div class="overlay"></div>
          <div class="content"></div>
        </div>

        <div class="swiper-slide" style="background-image: url('../assets/img/tira.jpg');">
          <div class="overlay"></div>
          <div class="content"></div>
        </div>

      </div>

      <div class="swiper-pagination"></div>
      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>

    </div>
  </div>
</section>

<h1 class="noticias">PRINCIPAIS NOTÍCIAS</h1>

<style>
/* Estilo da seção de notícias */
.noticias {
  text-align: center;
  font-size: 2.5em; /* Tamanho maior do título */
  margin-bottom: 30px;
  padding-right: 50px;
}

/* Estilo de cada entrada de notícia */
.post-entry {
  margin-bottom: 30px;
  overflow: hidden; /* Garante que qualquer conteúdo excedente seja escondido */
  tex
}

/* Imagens dentro das notícias */
.post-entry img {
  width: 100%;  /* Faz com que as imagens ocupem 100% da largura do container */
  height: auto;  /* Mantém a altura proporcional */
  object-fit: cover;  /* Garante que a imagem cubra completamente a área sem distorções */
  border-radius: 10px;  /* Bordas arredondadas */
}

/* Estilo das metadatas (data, categoria) */
.post-meta {
  font-size: 1.1em;
  color: #777;
}

/* Estilo dos títulos das notícias */
h2 a {
  font-size: 1em;
  color: #333;
  text-decoration: none;
}

h2 a:hover {
  color: #FF6D00;
}

/* Ícones (caso adicione algum) */
.post-icons {
  display: flex;
  justify-content: flex-start;
  align-items: center;
  gap: 20px; /* Espaçamento entre os ícones */
  margin-top: 10px;
  font-size: 1.2em;
  color: #555;
}

.post-icons .icon {
  display: flex;
  align-items: center;
  cursor: pointer;
  transition: color 0.3s;
}

.post-icons .icon i {
  margin-right: 8px;
  font-size: 1.4em;
}

.post-icons .icon:hover {
  color: #FF6D00;
}

/* Cor padrão do ícone de like */
.like-icon {
  color: #ccc; /* Cor cinza */
  cursor: pointer;
}

/* Cor do ícone de like quando for curtido */
.like-icon.liked {
  color: rgb(255, 8, 0); /* Cor laranja/avermelhada */
}

/* Parágrafo dentro das notícias */
.post-entry p {
  font-size: 1.1em;
  line-height: 1.6;
  color: #555;
}

/* Garante o espaçamento adequado entre as colunas */
.row.g-5 {
  gap: 30px; /* Aumenta o espaço entre as colunas */
  text-align:center;
  padding-right: 50px;
}

/* Ajuste para que as imagens não quebrem o layout em dispositivos menores */
@media (max-width: 768px) {
  .col-lg-4, .col-md-6, .col-sm-12 {
    width: 100%;
    margin-bottom: 20px; /* Ajusta o espaçamento em telas menores */
    text-align:center;
    padding-right: 50px;
  }
}
</style>

<div class="row g-5">

<?php
// Conexão com o banco de dados
$servername = "localhost";
$username = "root";
$password = "";
$database = "meu_banco";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

$sql = "SELECT * FROM noticias ORDER BY data DESC";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Loop para exibir as notícias
    while($row = $result->fetch_assoc()) {
        $noticia_id = $row['id'];
        $likes = isset($row['likes']) ? $row['likes'] : 0;
        $comentarios = isset($row['comentarios']) ? $row['comentarios'] : 0;

        // Cada notícia é envolvida em uma coluna (col-lg-4 para 3 colunas grandes, col-md-6 para 2 colunas médias)
        echo '<div class="col-lg-4 col-md-6 col-sm-12">
                <div class="post-entry">
                    <img src="../assets/img/' . $row['imagem'] . '" alt="" class="img-fluid">
                    <div class="post-meta"><span class="date">' . $row['categoria'] . '</span> <span class="mx-1">•</span> <span>' . $row['data'] . '</span></div>
                    <h2><a href="#">' . $row['titulo'] . '</a></h2>
                    <p class="mb-4 d-block">' . $row['descricao'] . '</p>
                    <div class="post-icons">
                        <div class="icon like-icon" data-id="' . $noticia_id . '">
                            <i class="fas fa-heart"></i> 
                            <span class="like-count">' . $likes . '</span>
                        </div>
                        <div class="icon comment-icon" data-id="' . $noticia_id . '">
                            <i class="fas fa-comment"></i> 
                            <span class="comment-count">' . $comentarios . '</span>
                        </div>
                    </div>
                </div>
            </div>';
    }
} else {
    echo "Nenhuma notícia encontrada.";
}

$conn->close();
?>

</div>
<!-- <section id="trending-category" class="trending-category section">
  <div class="container" data-aos="fade-up" data-aos-delay="100">
    <div class="row g-5">

      <div class="col-lg-4 col-md-6">
        <div class="post-entry lg">
          <img src="../assets/img/IMG_8489.jpg" alt="" class="img-fluid">
          <div class="post-meta"><span class="date">ONU</span> <span class="mx-1">•</span> <span>Mar 21 '25</span></div>
          <h2><a href="#">ONU CTPM</a></h2>
          <p class="mb-4 d-block">
            A simulação da ONU é um evento educacional onde estudantes do ensino médio assumem o papel de diplomatas...
          </p>
          <div class="post-icons">
            <div class="icon like-icon" data-id="1">
              <i class="fas fa-heart"></i> <span class="like-count">0</span>
            </div>
            <div class="icon comment-icon" data-id="1">
              <i class="fas fa-comment"></i> <span class="comment-count">0</span>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6">
        <div class="post-entry lg">
          <img src="../assets/img/second.jpg" alt="" class="img-fluid">
          <div class="post-meta"><span class="date">SORTEIO</span> <span class="mx-1">•</span> <span>Mar 22 '25</span></div>
          <h2><a href="https://www.instagram.com/p/DHUjCOqpRyz/?img_index=1">Sorteio dos Países e Imprensas da ONU</a></h2>
          <p class="mb-4 d-block">
            Na manhã de 12 de março, começaram os Jogos da ONU 2025...
            <a href="../confira.html" class="confira-button">CONFIRA</a>
          </p>
          <div class="post-icons">
            <div class="icon like-icon" data-id="2">
              <i class="fas fa-heart"></i> <span class="like-count">0</span>
            </div>
            <div class="icon comment-icon" data-id="2">
              <i class="fas fa-comment"></i> <span class="comment-count">0</span>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6">
        <div class="post-entry lg">
          <img src="../assets/img/IMG_8524.jpg" alt="" class="img-fluid">
          <div class="post-meta"><span class="date">Eventos</span> <span class="mx-1">•</span> <span>Abr 18 '25</span></div>
          <h2><a href="https://www.instagram.com/p/DImn7TSSjUC/?img_index=1">Divulgação de datas e Eventos</a></h2>
          <p class="mb-4 d-block">
            As datas e eventos dos Jogos da ONU 2025 foram divulgados. Acompanhe o cronograma completo...
          </p>
          <div class="post-icons">
            <div class="icon like-icon" data-id="3">
              <i class="fas fa-heart"></i> <span class="like-count">0</span>
            </div>
            <div class="icon comment-icon" data-id="3">
              <i class="fas fa-comment"></i> <span class="comment-count">0</span>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6">
        <div class="post-entry lg">
          <img src="../assets/img/IMG_8497.jpg" alt="" class="img-fluid">
          <div class="post-meta"><span class="date">Integrantes</span> <span class="mx-1">•</span> <span>Abr 18 '25</span></div>
          <h2><a href="https://www.instagram.com/p/DI65XBEp1q6/?igsh=MTI0ZDhuank4ZDNjNQ%3D%3D&img_index=1">Integrantes da mesa</a></h2>
          <p class="mb-4 d-block">
            Integrantes da mesa durante o evento da ONU no CTPM, representando com responsabilidade e compromisso os valores da instituição.
          </p>
          <div class="post-icons">
            <div class="icon like-icon" data-id="4">
              <i class="fas fa-heart"></i> <span class="like-count">0</span>
            </div>
            <div class="icon comment-icon" data-id="4">
              <i class="fas fa-comment"></i> <span class="comment-count">0</span>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div> -->
  <script>
    document.addEventListener('DOMContentLoaded', () => {
    // Atualizar contagem de likes
    const likeIcons = document.querySelectorAll('.like-icon');
    const commentIcons = document.querySelectorAll('.comment-icon');

    likeIcons.forEach(likeIcon => {
        likeIcon.addEventListener('click', () => {
            const postId = likeIcon.getAttribute('data-id');
            const likeCountElement = likeIcon.querySelector('.like-count');

            let currentLikes = parseInt(likeCountElement.innerText);
            currentLikes++;

            likeCountElement.innerText = currentLikes;
            likeIcon.classList.add('liked'); // Pode adicionar um estilo de like ativado

            // Envia para o servidor salvar o like
            fetch('like.php', {
                method: 'POST',
                body: JSON.stringify({ id: postId }),
                headers: {
                    'Content-Type': 'application/json'
                }
            });
        });
    });

    // Atualizar contagem de comentários
    commentIcons.forEach(commentIcon => {
        commentIcon.addEventListener('click', () => {
            const postId = commentIcon.getAttribute('data-id');
            const commentCountElement = commentIcon.querySelector('.comment-count');

            let currentComments = parseInt(commentCountElement.innerText);
            currentComments++;

            commentCountElement.innerText = currentComments;

            // Envia para o servidor salvar o comentário
            fetch('comment.php', {
                method: 'POST',
                body: JSON.stringify({ id: postId }),
                headers: {
                    'Content-Type': 'application/json'
                }
            });
        });
    });
});

  </script>
</section>


</main>

<footer id="footer" class="footer dark-background">
  <div class="container footer-top">
    <div class="row gy-4">
      <div class="col-lg-4 col-md-6 footer-about">
        <a href="../index.html" class="logo d-flex align-items-center">
          <span class="sitename">EL PAÍS</span>
        </a>
        <div class="footer-contact pt-3">
          <p>R. Antonio Patrocínio Parreiras - 40</p>
          <p>Pouso Alegre, MG, 37550-000</p>
          <p class="mt-3"><strong>Telefone:</strong> <span>(35) 99767-1914</span></p>
          <p><strong>Email:</strong> <span>elpaisctpm@gmail.com</span></p>
        </div>
        <div class="social-links d-flex mt-4">
          <a href="https://www.instagram.com/ctpm.elpais/"><i class="bi bi-instagram"></i></a>
        </div>
      </div>
    </div>

    <div class="container copyright text-center mt-4">
      <p>© <span>Copyright 2025</span> <strong class="px-1 sitename">EL PAÍS</strong> <span>All Rights Reserved</span></p>
      <strong>Prod by Giovanni Caramello Grego</strong>
      <p><span class="camuflado">o namorado da nanda</span></p>
    </div>

    <style>
      .camuflado {
        color: transparent;
        transition: color 0.3s ease;
        cursor: pointer;
      }
      .camuflado:hover {
        color: rgba(211, 13, 13, 0.89);
      }
    </style>
  </div>
</footer>

<a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center">
  <i class="bi bi-arrow-up-short"></i>
</a>

<div id="preloader"></div>

<!-- Vendor JS Files -->
<script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="../assets/vendor/php-email-form/validate.js"></script>
<script src="../assets/vendor/aos/aos.js"></script>
<script src="../assets/vendor/swiper/swiper-bundle.min.js"></script>

<!-- Libras Plugin -->
<div vw class="enabled">
  <div vw-access-button class="active"></div>
  <div vw-plugin-wrapper>
    <div class="vw-plugin-top-wrapper"></div>
  </div>
</div>
<script src="https://vlibras.gov.br/app/vlibras-plugin.js"></script>
<script>new window.VLibras.Widget('https://vlibras.gov.br/app');</script>

<script src="../assets/js/main.js"></script>

</body>
</html>
