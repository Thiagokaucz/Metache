<?php
require_once('config/config.php');

class MeusAnunciosController {
    public function index() {
        require_once('app/views/header.php');
        require_once('app/views/meusAnuncios.php');
        require_once('app/views/footer.php');
    }
}
?>
