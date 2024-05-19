<?php
require_once('config/config.php');

class ComprasController {
    public function index() {
        require_once('app/views/header.php');
        require_once('app/views/compras.php');
        require_once('app/views/footer.php');
    }
}
?>
