<?php

$cars = $app['database']->insert('cars', [
    'name' => $_POST['name'],
    'image_url' => $_POST['image_url'],
    'year' => $_POST['year'],
    'color' => $_POST['color'],
]);

header('Location: /');
