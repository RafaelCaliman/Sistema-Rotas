<?php
$router->get('/', 'HomeController@index');
$router->get('/login', 'User/LoginController@index');
$router->get('/produto', 'ProdutoController@index');
$router->get('/logout' , 'User/LogoutController@logout');
$router->get('/cadastrar', 'User/RegisterController@create');

$router->post('/autenticar', 'User/LoginController@autenticar');
$router->post('/cadastrar', 'User/RegisterController@store');

?>