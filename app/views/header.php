<?php
// session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
  <a class="navbar-brand" href="#">
    <img src="/public/img/Metache.png" alt="Logo" height="25" width="auto">
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
            <a class="nav-link" href="/register" style="color: orange;">Anunciar</a>
          </li>
        <?php endif; ?>
      </ul>
    </div>
  </div>
</nav>

</body>
</html>
