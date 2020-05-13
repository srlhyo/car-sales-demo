<?php

$router->get('', 'PagesController@home');
$router->get('about', 'PagesController@about');
$router->get('contact', 'PagesController@contact');
$router->get('about/me', 'PagesController@aboutme');
$router->get('details/agent', 'DetailsController@agent');

$router->post('agents', 'DetailsController@store');