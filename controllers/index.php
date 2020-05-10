<?php

$cars = $app['database']->selectAll('cars', 'Car');

require 'views/index.view.php';