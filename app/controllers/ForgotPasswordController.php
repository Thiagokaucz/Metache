<?php
require_once('config/config.php');
require_once('app/models/User.php');

class ForgotPasswordController {
    private $userModel;

    public function __construct() {
        $this->userModel = new User();
    }

    public function showForm() {
        require_once('app/views/header.php');
        require_once('app/views/forgot-password.php');
        require_once('app/views/footer.php');
    }

    public function handleForm() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $email = $_POST['email'];
            $user = $this->userModel->findByEmail($email);

            if ($user) {
                // Aqui você enviaria o email de recuperação
                $message = "Um link de recuperação foi enviado para o seu email.";
                require_once('app/views/header.php');
                require_once('app/views/forgot-password.php');
                require_once('app/views/footer.php');
            } else {
                $error = "Email não encontrado!";
                require_once('app/views/header.php');
                require_once('app/views/forgot-password.php');
                require_once('app/views/footer.php');
            }
        } else {
            require_once('app/views/header.php');
            require_once('app/views/forgot-password.php');
            require_once('app/views/footer.php');
        }
    }
}
?>
