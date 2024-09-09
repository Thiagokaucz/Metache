<?php
namespace Metache\Thiago\Infrastructure\Repository\Repositories;

use PDO;
use Metache\Thiago\Infrastructure\Repository\InterfaceRepositorio;

class ComumRepo implements InterfaceRepositorio{

    public function __construct(protected PDO $executa){
    }

    
}