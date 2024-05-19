<?php require_once('header.php'); ?>
<h1>Recuperar Senha</h1>
<?php if (isset($message)): ?>
    <p style="color: green;"><?php echo $message; ?></p>
<?php endif; ?>
<?php if (isset($error)): ?>
    <p style="color: red;"><?php echo $error; ?></p>
<?php endif; ?>
<form method="POST" action="/forgot-password">
    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required>
    <br>
    <button type="submit">Enviar link de recuperação</button>
</form>
<?php require_once('footer.php'); ?>
