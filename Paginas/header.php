<?php
 session_start();
?>
<!DOCTYPE html>
<html lang="PT-BR">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Ícones do Bootstrap -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">

  <style>
      /* Estilo para alterar a cor de fundo do body */
      body {
        background-color: #f0f0f5; /* Substitua com a cor desejada */
      }

      /* Estilo para uma seção com fundo personalizado */
      .custom-section {
        background-color: #e0e0e5; /* Cor de fundo para a seção */
        padding: 20px;
        border-radius: 8px;
      }
    </style>
    
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
  <a class="navbar-brand" href="#">
    <img src="img/Metache.png" alt="Logo" height="25" width="auto">
</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav me-auto">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/sobre">Sobre</a>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="comprasDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Minhas Compras
          </a>
          <ul class="dropdown-menu" aria-labelledby="comprasDropdown">
            <li><a class="dropdown-item" href="/compras">Minhas Compras 1</a></li>
            <li><a class="dropdown-item" href="/compras">Minhas Compras 2</a></li>
          </ul>
        </li>
        
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="anunciosDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Meus Anúncios
          </a>
          <ul class="dropdown-menu" aria-labelledby="anunciosDropdown">
            <li><a class="dropdown-item" href="/meusAnuncios">Meus Anúncios 1</a></li>
            <li><a class="dropdown-item" href="/meusAnuncios">Meus Anúncios 2</a></li>
          </ul>
        </li>
        
        <li class="nav-item">
          <a class="nav-link" href="/chat">Chat</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/notificacoes">Notificações</a>
        </li>
      </ul>
      
      <ul class="navbar-nav">
        <?php if (isset($_SESSION['user_id'])): ?>
          <li class="nav-item">
            <a class="nav-link" href="/usuario"><span class="bi bi-person"></span> <?php echo htmlspecialchars($_SESSION['nome']); ?></a>
          </li>
          <li class="nav-item">
          <a class="nav-link" href="/login" style="color: orange;"> Anunciar</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/logout"  style="color: red;"><span class="bi bi-box-arrow-right"></span> Sair</a>
          </li>
        <?php else: ?>
          <li class="nav-item">
            <a class="nav-link" href="/login"><span class="bi bi-person"></span> Entrar</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="/register" style="color: #FF6B01;">Anunciar</a>
          </li>
        <?php endif; ?>
      </ul>
    </div>
  </div>
</nav>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
