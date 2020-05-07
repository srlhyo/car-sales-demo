<?php

require 'functions.php';
// require 'User.php';
// require 'Agent.php';
require 'Car.php';


$query = require 'bootstrap.php';
$cars = $query->selectAll('cars', 'Car');

require 'index.view.php';