<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anunciar</title>
</head>
<body>
    <h1>Anunciar</h1>
    <form method="POST" action="/gravar-anuncio" enctype="multipart/form-data">
        <label for="titulo">Título:</label>
        <input type="text" id="titulo" name="titulo" required><br>

        <label for="descricao">Descrição:</label>
        <textarea id="descricao" name="descricao" required></textarea><br>

        <label for="preco">Preço:</label>
        <input type="text" id="preco" name="preco" required><br>

        <label for="condicao">Condição:</label>
        <select id="condicao" name="condicao" required>
            <?php foreach ($condicoes as $condicao): ?>
                <option value="<?php echo $condicao; ?>"><?php echo ucfirst($condicao); ?></option>
            <?php endforeach; ?>
        </select><br>

        <label for="disponibilidade">Disponibilidade:</label>
        <select id="disponibilidade" name="disponibilidade" required>
            <?php foreach ($disponibilidades as $disponibilidade): ?>
                <option value="<?php echo $disponibilidade; ?>"><?php echo ucfirst($disponibilidade); ?></option>
            <?php endforeach; ?>
        </select><br>

        <label for="categoriaID">Categoria:</label>
        <select id="categoriaID" name="categoriaID" required>
            <?php foreach ($categorias as $categoria): ?>
                <option value="<?php echo $categoria['categoriaID']; ?>"><?php echo $categoria['nome']; ?></option>
            <?php endforeach; ?>
        </select><br>

        <label for="imagem">Imagem:</label>
        <input type="file" id="imagem" name="imagem" accept="image/*" required><br>

        <button type="submit">Publicar Anúncio</button>
    </form>
</body>
</html>
