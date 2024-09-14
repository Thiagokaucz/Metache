<?php
namespace Metache\Thiago\Infrastructure\Database;
use PDO;

class ConexaoBanco{
    public static function conectar():PDO{
        $anfitriao  = '108.167.188.252';
        $nomeBanco  = 'rotinc02_metache';
        $usuario    = 'rotinc02_taigon_chaukz';
        $senha      = 'x8n1I/*1@s;IJOm6uy([YtSP_';
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

