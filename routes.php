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
    '/anunciar' => 'AnunciarController@index',
    // Adicione outras rotas aqui conforme necessário
];
?>
