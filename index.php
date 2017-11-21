<?php

require_once 'vendor/autoload.php';

use LM\WebFramework\Controller\MainController;
use LM\WebFramework\Routing\CustomizableRouter;
use LM\Portfolio\AmpHomeController;
use LM\Portfolio\HomeController;

$routes_config = array(
    '' => new HomeController(),
    '/amp' => new AmpHomeController(),
);

$router = new CustomizableRouter($routes_config);
$main_controller = new MainController();
$main_controller->processRequest($router);