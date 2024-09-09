<?php
namespace Metache\Thiago\Controller;
use Metache\Thiago\Infrastructure\Repository\InterfaceRepositorio;


readonly class PegarProduto implements Controlador{
    
    public function __construct(private InterfaceRepositorio $repo){
        
    }

    public function requisitar():void{
        echo json_encode($this->repo->trazerTodosProdutos(), JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
    }
}