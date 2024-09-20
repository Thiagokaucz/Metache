<!-- templates/Users/add.php -->
<?= $this->Form->create($user) ?>
<fieldset>
    <legend><?= __('Add User') ?></legend>
    <?= $this->Form->control('nome') ?>
    <?= $this->Form->control('email') ?>
    <?= $this->Form->control('senha') ?>
    <?= $this->Form->control('endereco') ?>
    <?= $this->Form->control('numeroTelefone') ?>
    <?= $this->Form->control('tipoUsuario', ['type' => 'select', 'options' => ['comprador' => 'Comprador', 'vendedor' => 'Vendedor']]) ?>
</fieldset>
<?= $this->Form->button(__('Save')) ?>
<?= $this->Form->end() ?>
