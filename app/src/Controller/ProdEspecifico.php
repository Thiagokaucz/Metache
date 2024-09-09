<?php
namespace Metache\Thiago\Controller;
use Metache\Thiago\Infrastructure\Repository\InterfaceRepositorio;

readonly class ProdEspecifico implements Controlador{
    
    public function __construct(private InterfaceRepositorio $repo){
        
    }

    public function requisitar():void{
        $prodId     = filter_input(INPUT_GET, 'prodId', FILTER_VALIDATE_INT);
        $produto    = $this->repo->consultarProdEspecifico($prodId);
        require_once __DIR__ . '/../Views/produtoUnico.php';
        
    }
}