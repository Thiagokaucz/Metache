<?php
use Metache\Thiago\Controller\Erro404;
use Metache\Thiago\Infrastructure\Database\ConexaoBanco;
use Metache\Thiago\Infrastructure\Repository\FabricaRepositorios;

require_once __DIR__ . '/../vendor/autoload.php';
$rotas = require_once __DIR__ . '/../config/rota.php';

$pdo = ConexaoBanco::conectar();
$repositorioFabrica = new FabricaRepositorios($pdo);

$pathInfo = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH) ?? '/';
$httpMethod = $_SERVER['REQUEST_METHOD'];
$chave = "$httpMethod|$pathInfo";

if (array_key_exists($chave, $rotas)) {
    $classeControlador  = $rotas[$chave]['controller'];
    $classeRepository   = $rotas[$chave]['repository'];

    $repositorio = $repositorioFabrica->SelecionaRepositorio($classeRepository);
    $controlador = new $classeControlador($repositorio);

}else{
    $controlador = new Erro404();
}

$controlador->requisitar();
