<?php

// $router->define([
//     'phpprac' => 'controllers/index.php',
//     'phpprac/about' => 'controllers/about.php',
//     'phpprac/about/culture' => 'controllers/about-culture.php',
//     'phpprac/contact' => 'controllers/contact.php',
//     'phpprac/name' => 'controllers/add-names.php'
// ]);

$router->get('', 'PageController@home');

$router->get('about', 'PageController@About');

$router->get('about/culture', 'controllers/about-culture.php');

$router->get('contact', 'PageController@Contact');

$router->post('name', 'controllers/add-names.php');

// var_dump($router->routes);
