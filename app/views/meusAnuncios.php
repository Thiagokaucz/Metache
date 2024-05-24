<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meus Anúncios</title>
</head>
<body>
    <h1>Meus Anúncios</h1>
    <table>
        <thead>
            <tr>
                <th>Titulo</th>
                <th>Descrição</th>
                <th>Preço</th>
                <th>Condição</th>
                <th>Disponibilidade</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($anuncios as $anuncio): ?>
            <tr>
                <td><?php echo $anuncio['nome']; ?></td>
                <td><?php echo $anuncio['descricao']; ?></td>
                <td><?php echo $anuncio['preco']; ?></td>
                <td><?php echo $anuncio['condicao']; ?></td>
                <td><?php echo $anuncio['disponibilidade']; ?></td>
                <td>
                    <a href="/editar-anuncio?id=<?php echo $anuncio['produtoID']; ?>">Editar</a>
                    <a href="/excluir-anuncio?id=<?php echo $anuncio['produtoID']; ?>">Excluir</a>
                    <a href="/excluir-anuncio?id=<?php echo $anuncio['produtoID']; ?>">Vendido</a>
                    <a href="/excluir-anuncio?id=<?php echo $anuncio['produtoID']; ?>">Pausado</a>

                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>
