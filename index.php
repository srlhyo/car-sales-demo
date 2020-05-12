<?php

require 'core/bootstrap.php';

require $result = Router::load('routes.php')
    ->direct(Request::uri(), Request::method());