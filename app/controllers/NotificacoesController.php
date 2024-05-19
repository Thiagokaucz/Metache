<?php
require_once('config/config.php');

class NotificacoesController {
    public function index() {
        require_once('app/views/header.php');
        require_once('app/views/notificacoes.php');
        require_once('app/views/footer.php');
    }
}
?>
