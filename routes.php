<?php

// set up the routes
$router->define([
    '' => 'controllers/index.php',
    'about' => 'controllers/about.php',
    'contact' => 'controllers/contact.php',
    'about/me' => 'controllers/about-me.php'
]);