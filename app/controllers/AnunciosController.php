<?php
require_once('config/config.php');

class AnunciosController {
    public function index() {
        require_once('app/views/header.php');
        require_once('app/views/anuncios.php');
        require_once('app/views/footer.php');
    }
}
?>
