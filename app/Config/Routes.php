<?php

namespace Config;

//crea una nueva instancia de clase de nuestra coleccion de rutas

$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();

//route sinceee we don't have to scan directories
$routes->get('/', 'Home::index');
$routes->get('principal', 'Home::index');
$routes->get('quienes_somos', 'Home::quienes_somos');
$routes->get('acerca_de', 'Home::acerca_de');
$routes->get('registro', 'Home::registro');
$routes->get('login', 'Home::login');

//Rutas del Registro de Usuarios
$routes->get('/registro','usuario_controller::create');
$routes->post('enviar-form', 'usuario_controller::formValidation');

//Rutas de Login
$routes->get('/login', 'login_controller');
$routes->post('/enviarlogin', 'login_controller::auth');
$routes->get('/panel', 'panel_controller::index',['filter'=> 'auth']);
$routes->get('/logout', 'login_controller::logout');