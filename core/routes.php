<?php
$router->get('/', 'HomeController@index');
$router->get('/login', 'User/LoginController@index');
$router->get('/produto', 'Product/ProductController@index');
$router->get('/logout' , 'User/LogoutController@logout');
$router->get('/cadastrar', 'User/RegisterController@create');
$router->get('/admin', 'Admin/AdminController@index');

$router->post('/autenticar', 'User/LoginController@autenticar');
$router->post('/cadastrar', 'User/RegisterController@store');

?>