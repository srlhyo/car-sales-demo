<?php

require 'functions.php';
require 'User.php';
require 'Agent.php';
require 'Car.php';


$pdo = connection();

$cars = fetchAllRecords($pdo, 'Car', 'cars');
$users = fetchAllRecords($pdo, 'User', 'users');
$agents = fetchAllRecords($pdo, 'Agent', 'agents');



require 'index.view.php';