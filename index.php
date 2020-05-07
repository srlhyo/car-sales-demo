<?php

require 'functions.php';
require 'SiteData.php';
require 'User.php';
require 'Agent.php';
require 'Car.php';

$data = new SiteData($images, $salesMessages);

$jonas = new User('Jonas', 25, 60000);

$buffo = new Agent('Sales Agent', 2000);
$buffo->name = "Buffo";

$ferrari = new Car(1950, 'Ferrari', 'red', 50000);
$porsh = new Car(1974, 'Porsh', 'grey', 40000);
$fiat = new Car(1940, 'Fiat', 'red', 10000);

// stories
$jonas->hasDrivingLicense();

$buffo->salesAuthorized($jonas, $ferrari);

$data->salesMessage($buffo);

$data->userProfileImage($jonas);
$data->agentProfileImage($buffo);
$data->carImages($ferrari);
$data->carImages($porsh);
$data->carImages($fiat);

// dd($result);

require 'index.view.php';