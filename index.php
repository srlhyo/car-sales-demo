<?php

require 'vendor/autoload.php';
require 'core/bootstrap.php';

$result = Router::load('routes.php')
    ->direct(Request::uri(), Request::method());