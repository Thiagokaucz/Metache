<?php
require_once('config/connection.php');

class Categorias {
    
    public static function buscarCategorias() {
        $database = new Database();
        $conn = $database->getConnection();
        $resultado = $conn->query('SELECT * FROM Categoria');
        return $resultado->fetchAll(PDO::FETCH_ASSOC);
    }
}
?>
