<h1>Anunciar</h1>
<p>Formulário para publicar um novo anúncio.</p>
<form method="POST" action="/anunciar">
    <label for="titulo">Título:</label>
    <input type="text" id="titulo" name="titulo" required>
    <br>
    <label for="descricao">Descrição:</label>
    <textarea id="descricao" name="descricao" required></textarea>
    <br>
    <button type="submit">Publicar Anúncio</button>
</form>
<!-- Adicione aqui a lógica para publicar um novo anúncio -->
