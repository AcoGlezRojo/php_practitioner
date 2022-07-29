<?php

$router->get('', 'PagesController@home');
$router->get('about', 'PagesController@about');
$router->get('contact', 'PagesController@contact');
$router->get('arrays', 'PagesController@arrays');
$router->post('contact/submit', 'PagesController@addName');
