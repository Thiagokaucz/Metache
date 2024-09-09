<?php
namespace Metache\Thiago\Infrastructure\Repository;

use Metache\Thiago\Infrastructure\Repository\InterfaceRepositorio;
use Metache\Thiago\Infrastructure\Repository\Repositories\{
                                                ClienteRepo, 
                                                ProdutosRepo, 
                                                ComumRepo
                    };
use PDO;

class FabricaRepositorios{

    public function __construct(protected PDO $executa){
        
    }

    public function SelecionaRepositorio(string $tipo):InterfaceRepositorio{
        return match ($tipo) {
            'Cliente'   => new ClienteRepo($this->executa),
            'Produto'   => new ProdutosRepo($this->executa),
            'Comum'     => new ComumRepo($this->executa),
            default     => throw new \Exception("Estou dando a foda fora")
            
        };
    }
}