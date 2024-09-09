<?php
namespace Metache\Thiago\Infrastructure\Repository\Repositories;

use PDO;
use Metache\Thiago\Infrastructure\Repository\InterfaceRepositorio;

class ClienteRepo implements InterfaceRepositorio{

    public function __construct(protected PDO $executa){
    }

    public function pegaTodosUsuarios(string $tipo):string|array
    {
        $consulta   = 'SELECT * FROM `usuarios` WHERE usuarioTipo = :tipo';
        $declaroQue = $this->executa->prepare($consulta);
        $declaroQue->bindValue(':tipo', $tipo);
        $declaroQue->execute();
        return $declaroQue->fetch(PDO::FETCH_ASSOC)??"Estou dando a foda fora";
    }

}