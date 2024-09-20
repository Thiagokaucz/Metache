<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title><?= $this->fetch('title') ?></title>
    <?= $this->Html->css('style') ?>
    <?= $this->Html->script('script') ?>
</head>
<body>
<header>
    <!-- Seu cabeçalho personalizado, se necessário -->
</header>

<main>
    <?= $this->fetch('content') ?>
</main>

<footer>
    <!-- Seu rodapé personalizado, se necessário -->
</footer>
</body>
</html>
