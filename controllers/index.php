<?php

$cars = $query->selectAll('cars', 'Car');

require 'views/index.view.php';