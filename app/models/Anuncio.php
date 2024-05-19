<?php
require_once('config/connection.php');

class Anuncio {
    
    public static function buscarCondicoes() {
        $database = new Database();
        $conn = $database->getConnection();
        $resultado = $conn->query("SHOW COLUMNS FROM Produto WHERE Field = 'condicao'");
        $tipoColuna = $resultado->fetch(PDO::FETCH_ASSOC)['Type'];
        preg_match("/^enum\(\'(.*)\'\)$/", $tipoColuna, $matches);
        $opcoes = explode("','", $matches[1]);
        return $opcoes;
    }

    public static function buscarDisponibilidades() {
        $database = new Database();
        $conn = $database->getConnection();
        $resultado = $conn->query("SHOW COLUMNS FROM Produto WHERE Field = 'disponibilidade'");
        $tipoColuna = $resultado->fetch(PDO::FETCH_ASSOC)['Type'];
        preg_match("/^enum\(\'(.*)\'\)$/", $tipoColuna, $matches);
        $opcoes = explode("','", $matches[1]);
        return $opcoes;
    }

    public static function criarAnuncio($nome, $descricao, $preco, $condicao, $disponibilidade, $categoriaID, $caminhoImagem, $userID) {
        $database = new Database();
        $conn = $database->getConnection();

        $sql = "INSERT INTO Produto (nome, descricao, preco, condicao, disponibilidade, categoriaID, imagem, userID) 
                VALUES (:nome, :descricao, :preco, :condicao, :disponibilidade, :categoriaID, :imagem, :userID)";
        
        $stmt = $conn->prepare($sql);

        $stmt->bindParam(':nome', $nome);
        $stmt->bindParam(':descricao', $descricao);
        $stmt->bindParam(':preco', $preco);
        $stmt->bindParam(':condicao', $condicao);
        $stmt->bindParam(':disponibilidade', $disponibilidade);
        $stmt->bindParam(':categoriaID', $categoriaID);
        $stmt->bindParam(':imagem', $caminhoImagem);
        $stmt->bindParam(':userID', $userID);

        return $stmt->execute();
    }
}
?>
