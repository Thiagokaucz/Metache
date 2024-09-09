<?php
require __DIR__ . '/eleCabecario.php';
/*
* @var Metache\Thiago\Model\Produto|null $produto
*/
?>

<main>
<h1>Lista de Produtos</h1>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Descrição</th>
                <th>Preço</th>
                <th>Disponibilidade</th>
            </tr>
        </thead>
        <tbody>
            <tr>    
                <td><?= $produto->produtoId; ?></td>
                <td><?= $produto->nome; ?></td>
                <td><?= $produto->descricao; ?></td>
                <td><?= $produto->preco; ?></td>
                <td><?= $produto->disponibilidade; ?></td>
            </tr>
        </tbody>
    </table>
</main>

<?php
require __DIR__ . '/eleRodape.php';
?>
