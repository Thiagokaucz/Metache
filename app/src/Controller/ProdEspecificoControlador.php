<?php
namespace Metache\Thiago\Controller;
use Metache\Thiago\Infrastructure\Repository\InterfaceRepositorio;

readonly class ProdEspecificoControlador implements Controlador{
    
    public function __construct(private InterfaceRepositorio $repo){
        
    }

    public function requisitar():void{
        $prodId = filter_input(INPUT_GET, 'prodId', FILTER_VALIDATE_INT);
        echo $prodId;
    }
}