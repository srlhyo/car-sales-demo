<?php

$query = require 'core/bootstrap.php';

// require 'controllers/about-me.php';
$router = new Router();

require 'routes.php';

$uri = trim($_SERVER['REQUEST_URI'], '/');
require $router->direct($uri);