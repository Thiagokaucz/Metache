<!-- templates/Users/index.php -->
<h1>Users Index</h1>
<table>
    <thead>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Address</th>
        <th>Phone Number</th>
        <th>User Type</th>
        <th>Registration Date</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($users as $user): ?>
        <tr>
            <td><?= h($user->userID) ?></td>
            <td><?= h($user->nome) ?></td>
            <td><?= h($user->email) ?></td>
            <td><?= h($user->endereco) ?></td>
            <td><?= h($user->numeroTelefone) ?></td>
            <td><?= h($user->tipoUsuario) ?></td>
            <td><?= h($user->dataRegistro) ?></td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
