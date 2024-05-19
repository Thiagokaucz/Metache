<?php
require_once('config/config.php');

class AnunciarController {
    public function index() {
        require_once('app/views/header.php');
        require_once('app/views/anunciar.php');
        require_once('app/views/footer.php');
    }
}
?>
