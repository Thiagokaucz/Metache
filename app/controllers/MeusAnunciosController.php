<?php
require_once('config/config.php');
require_once('app/models/Anuncio.php');


class MeusAnunciosController {
    public function mostrarMeusAnuncios() {
        session_start();
        // Verificar se o usuário esta logado
        if (!isset($_SESSION['user_id'])) {
            // Se o usuário não estiver logado, redirecionar para a página de login
            header('Location: /login');
            exit;
        }

        // Obter o ID do usuário em sessao
        $userID = $_SESSION['user_id'];

        // Buscar os anúncios do usuario atual
        $anuncios = Anuncio::buscarAnunciosUsuario($userID);

        // Carregar a visualização
        require_once('app/views/header.php');
        require_once('app/views/meusAnuncios.php');
        require_once('app/views/footer.php');
    }

    public function excluirAnuncio() {
        // Verificar se o usuario está logado
        session_start();
        if (!isset($_SESSION['user_id'])) {
            // Se o usuário nao estiver logado, redirecionar para a página de login
            header('Location: /login');
            exit;
        }

        // Verificar se o ID do anuncio a ser excluído foi fornecido na requisição
        if (!isset($_GET['id'])) {
            // Se o ID do anúncio nao foi fornecido, redirecionar de volta aos meus anúncios
            header('Location: /meusAnuncios');
            exit;
        }

        // Obter o ID do anúncio a ser excluido
        $anuncioID = $_GET['id'];

        // Obter o ID do usuário em sessao
        $userID = $_SESSION['user_id'];

        // Verificar se o anúncio pertence ao usuário logado
        $anuncio = Anuncio::buscarAnuncio($anuncioID);
        if (!$anuncio || $anuncio['userID'] != $userID) {
            // Se o anúncio não existe ou não pertence ao usuario, redirecionar de volta aos meus anúncios
            header('Location: /meusAnuncios');
            exit;
        }

        // Excluir o anúncio do banco de dados
        Anuncio::excluirAnuncio($anuncioID);

        // Redirecionar de volta aos meus anúncios com uma mensagem de sucesso
        header('Location: /meusAnuncios?excluido=1');
        exit;
    }
}
?>
