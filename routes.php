<?php


$router->get('', 'controllers/home.php');
$router->get('groceries', 'controllers/index.php');
$router->get('groceries/create', 'controllers/create.php');
$router->post('names', 'controllers/add-grocery.php');