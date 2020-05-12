<?php

require 'functions.php';

// depency injection container
App::bind('config', require 'config.php');

App::bind('database', new QueryBuilder(Connection::make(App::get('config')['database'])));
