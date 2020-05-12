<?php

$router->get('', 'controllers/index.php');
$router->get('about', 'controllers/about.php');
$router->get('contact', 'controllers/contact.php');
$router->get('about/me', 'controllers/about-me.php');
$router->get('details/agent', 'controllers/details-agent.php');

$router->post('agents', 'controllers/agents.php');