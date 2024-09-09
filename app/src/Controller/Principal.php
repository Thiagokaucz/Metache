<?php
namespace Metache\Thiago\Controller;


class Principal implements Controlador{
    public function requisitar():void{
        require_once __DIR__ . '/../Views/PaginaInicial.php';
    }
}