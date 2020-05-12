<?php

$cars = App::get('database')->selectAll('cars', 'Car');

require 'views/index.view.php';