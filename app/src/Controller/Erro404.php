<?php
namespace Metache\Thiago\Controller;


class Erro404 implements Controlador{
    public function requisitar():void{
        http_response_code(404);
    }
}