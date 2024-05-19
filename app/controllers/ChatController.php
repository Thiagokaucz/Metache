<?php
require_once('config/config.php');

class ChatController {
    public function index() {
        require_once('app/views/header.php');
        require_once('app/views/chat.php');
        require_once('app/views/footer.php');
    }
}
?>
