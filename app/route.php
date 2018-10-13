<?php
// var_dump($app); die();
$app->get('/', 'App\Controllers\HomeController:index')->setName('home');
//  Login
$app->get('/login', 'App\Controllers\AuthController:getLogin')->setName('login');
//  Register
$app->get('/reg', 'App\Controllers\AuthController:getRegister')->setName('register');
//  form satu
$app->get('/form-satu', 'App\Controllers\AuthController:formSatu')->setName('form-satu');
//  form dua
$app->get('/form-dua', 'App\Controllers\AuthController:formDua')->setName('form-dua');
// form tiga 
$app->get('/form-tiga', 'App\Controllers\AuthController:formTiga')->setName('form-tiga');
//  form empat
$app->get('/form-empat', 'App\Controllers\AuthController:formEmpat')->setName('form-empat');
//  form-send
$app->get('/form-send', 'App\Controllers\AuthController:formSend')->setName('form-send');


