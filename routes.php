<?php
$routes = [
    '/' => 'HomeController@index',
    '/sobre' => 'SobreController@index',
    '/login' => 'LoginController@login',
    '/logout' => 'LoginController@logout',
    '/register' => 'RegisterController@register',
    '/compras' => 'ComprasController@index',
    '/meusAnuncios' => 'MeusAnunciosController@index',
    '/chat' => 'ChatController@index',
    '/notificacoes' => 'NotificacoesController@index',
    '/anunciar' => 'AnunciarController@mostrarFormulario',
    '/gravar-anuncio' => 'AnunciarController@gravarAnuncio',
    // Adicione outras rotas aqui conforme necessário
];
?>
