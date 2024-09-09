<?php
namespace Metache\Thiago\Infrastructure\Database;
use PDO;

class ConexaoBanco{
    public static function conectar():PDO{
        $anfitriao  = 'localhost';
        $nomeBanco  = 'metache';
        $usuario    = 'root';
        $senha      = '1234';
        $dns        = "mysql:host=$anfitriao;dbname=$nomeBanco;charset=utf8mb4";
        $tratamento = [
                        PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION,
                        PDO::ATTR_DEFAULT_FETCH_MODE=>PDO::FETCH_ASSOC,
                        PDO::ATTR_PERSISTENT=>true    
                    ];
        try {
            return new PDO($dns, $usuario, $senha, $tratamento);
        } catch (PDOException $e) {
            throw new PDOException($e->getMessage(), $e->getCode());
        }
    }
}

