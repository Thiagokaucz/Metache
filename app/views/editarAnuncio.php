<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Anuncio</title>
</head>
<body>
    <div class="container">
        <h2>Editar Anuncio</h2>
        <form>
            <div class="form-group">
                <label for="nome">Titulo</label>
                <input type="text" id="nome" name="nome" required>
            </div>
            <div class="form-group">
                <label for="descricao">Descricao</label>
                <textarea id="descricao" name="descricao" rows="4" required></textarea>
            </div>
            <div class="form-group">
                <label for="preco">Preço</label>
                <input type="number" id="preco" name="preco" step="0.01" required>
            </div>
            <div class="form-group">
                <label for="condicao">Condicao</label>
                <select id="condicao" name="condicao" required>
                    <option value="novo">Novo</option>
                    <option value="usado">Usado</option>
                </select>
            </div>
            <div class="form-group">
                <label for="disponibilidade">Disponibilidade</label>
                <input type="checkbox" id="disponibilidade" name="disponibilidade">
                <label for="disponibilidade">Disponível</label>
            </div>
            <div class="form-group">
                <button type="submit">Salvar</button>
            </div>
        </form>
    </div>
</body>
</html>
