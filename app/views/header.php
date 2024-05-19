<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sua Aplicação</title>
    <link rel="stylesheet" href="/public/css/header.css">
</head>
<body>
    <header class="site-header">
        <nav class="site-nav">
            <ul>
                <li><a href="/">Home</a></li>
                <li><a href="/sobre">Sobre</a></li>
                <?php if (isset($_SESSION['user_id'])): ?>
                    <li><a href="/compras">Minhas Compras</a></li>
                    <li><a href="/meusAnuncios">Meus Anúncios</a></li>
                    <li><a href="/chat">Chat</a></li>
                    <li><a href="/notificacoes">Notificações</a></li>
                    <li><a href="/anunciar">Anunciar</a></li>
                    <li><a href="/logout">Logout (<?php echo htmlspecialchars($_SESSION['nome']); ?>)</a></li>
                <?php else: ?>
                    <li><a href="/login">Login</a></li>
                    <li><a href="/register">Registrar</a></li>
                <?php endif; ?>
            </ul>
        </nav>
    </header>
</body>
</html>
