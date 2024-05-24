<?php
require_once('app/models/Categorias.php');
require_once('app/models/Anuncio.php');

class AnunciarController {

    public function mostrarFormulario() {

        // Carregar opções do formulário
        $categorias = Categorias::buscarCategorias();
        $condicoes = Anuncio::buscarCondicoes();
        //$disponibilidades = Anuncio::buscarDisponibilidades();

        // Carregar tela
        require_once('app/views/header.php');
        require_once('app/views/anunciar.php');
        require_once('app/views/footer.php');
    }

    public function gravarAnuncio() {  

        session_start();
        // Verificar se todos os campos obrigatórios foram preenchidos
        if (empty($_POST['titulo']) || 
            empty($_POST['descricao']) || 
            empty($_POST['preco']) || 
            empty($_POST['condicao']) || 
            //empty($_POST['disponibilidade']) || 
            empty($_POST['categoriaID']) || 
            empty($_FILES['imagem']['name'])) {

            // Redirecionar de volta ao formulario com uma mensagem de erro
            header('Location: /anunciar?erro=1');
            exit;
        }

        // Processar os dados do formulario
        $titulo = htmlspecialchars($_POST['titulo']);
        $descricao = htmlspecialchars($_POST['descricao']);
        $preco = floatval($_POST['preco']);  // Converter para float
        $condicao = htmlspecialchars($_POST['condicao']);
        //$disponibilidade = htmlspecialchars($_POST['disponibilidade']);
        $disponibilidade = 'disponivel';
        $categoriaID = intval($_POST['categoriaID']);
        $imagem = $_FILES['imagem'];

        // Verificar se foi enviado um arquivo de imagem
        if ($imagem['error'] !== UPLOAD_ERR_OK) {

            // Redirecionar de volta ao formulário com uma mensagem de erro específica para o upload
            header('Location: /anunciar?erro=upload');
            exit;
        }

        // Salvar a imagem
        $caminhoImagem = $this->salvarImagem($imagem);
        if ($caminhoImagem === null) {

            // Redirecionar de volta ao formulário com uma mensagem de erro específica para o upload
            header('Location: /anunciar?erro=upload');
            exit;
        }

        // Obter o ID do usuário em sessão
        session_start();

        if (!isset($_SESSION['user_id'])) {

            // Se o ID de usuário não estiver definido na sessão, redirecione com uma mensagem de erro
            header('Location: /anunciar?erro=3');
            exit;
        }

        $userID = $_SESSION['user_id'];

        // Gravar o anúncio no banco de dados com o user_id
        $sucesso = Anuncio::criarAnuncio($titulo, $descricao, $preco, $condicao, $disponibilidade, $categoriaID, $caminhoImagem, $userID);

        // Verificar se a criação do anúncio foi bem-sucedida
        if ($sucesso) {
            // Redirecionar para a página inicial com uma mensagem de sucesso
            header('Location: /?sucesso=1');
            exit;
        } else {
            // Redirecionar de volta ao formulário com uma mensagem de erro
            header('Location: /anunciar?erro=2');
            exit;
        }
    }

    private function salvarImagem($imagem) {
        
        // Obter o ID do usuário em sessão
        session_start();

        if (!isset($_SESSION['user_id'])) {
            // Se o ID de usuário não estiver definido na sessão, não podemos prosseguir com a lógica de salvar a imagem
            return null;
        }
    
        // Obter o ID do usuário em sessão
        $userID = $_SESSION['user_id'];
    
        // Caminho completo para a pasta de upload do usuário
        $uploadDir = __DIR__ . '/../../uploads/' . $userID . '/';
    
        // Verificar se o diretório do usuário existe, se não, criar
        if (!is_dir($uploadDir)) {
            mkdir($uploadDir, 0777, true);
        }
    
        // Obter o nome do arquivo
        $nomeArquivo = basename($imagem['name']);
    
        // Definir o caminho completo do arquivo de destino
        $uploadFile = $uploadDir . $nomeArquivo;
    
        // Mover o arquivo de imagem para o diretório de upload
        if (move_uploaded_file($imagem['tmp_name'], $uploadFile)) {
            // Retornar o caminho completo do arquivo salvo
            return $uploadFile;
        } else {
            // Se houver algum erro ao mover o arquivo, retornar null
            return null;
        }
    }
}
?>
