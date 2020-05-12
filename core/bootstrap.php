<?php

require 'functions.php';


use App\Core\App;


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
    require header("Location: {$name}");
}
