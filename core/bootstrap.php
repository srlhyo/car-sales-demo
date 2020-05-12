<?php

require 'functions.php';

// depency injection container
App::bind('config', require 'config.php');

App::bind('database', new QueryBuilder(Connection::make(App::get('config')['database'])));


// call the views
function view($name, $data = []) {
    extract($data);
    require "views/{$name}.view.php";
}

// redirect to any pages
function redirect($name) {
    return require header("Location: {$name}");
}
