<?php
$routes = [
    '/' => 'HomeController@index',
    '/sobre' => 'SobreController@index',
    '/login' => 'LoginController@login',
    '/logout' => 'LoginController@logout',
    '/register' => 'RegisterController@register',
    '/compras' => 'ComprasController@index',
    '/anuncios' => 'AnunciosController@index',
    '/chat' => 'ChatController@index',
    '/notificacoes' => 'NotificacoesController@index',
    '/anunciar' => 'AnunciarController@index',
    '/forgot-password' => 'ForgotPasswordController@showForm',
    '/forgot-password' => 'ForgotPasswordController@handleForm',
    // Adicione outras rotas aqui conforme necessário
];
?>
