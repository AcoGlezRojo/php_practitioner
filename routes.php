<?php

// $router->define([
//     ''                  =>  'controllers/index.controller.php',
//     'about'             =>  'controllers/about.controller.php',
//     'contact'           =>  'controllers/contact.controller.php',
//     'arrays'            =>  'controllers/arrays.controller.php',
//     'contact/submit'    =>  'controllers/contact_submit.controller.php',
// ]);

$router->get('', 'controllers/index.controller.php');
$router->get('about', 'controllers/about.controller.php');
$router->get('contact', 'controllers/contact.controller.php');
$router->get('arrays', 'controllers/arrays.controller.php');
$router->post('contact/submit', 'controllers/contact_submit.controller.php');

// var_dump($router->routes);
// die();