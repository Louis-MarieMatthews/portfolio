<?php

require_once 'vendor/autoload.php';

use LM\WebFramework\Controller\MainController;
use LM\WebFramework\Routing\CustomizableRouter;
use LM\Portfolio\AmpHomeController;
use LM\Portfolio\HomeController;
use LM\Portfolio\VersionController;

/**
 * @todo don't use constant, use a service
 */
define('PORTFOLIO_ROOT', __DIR__);

$routes_config = array(
    '/\A\/\Z/' => new HomeController(),
    '/\A\/amg\Z/' => new AmpHomeController(),
    '/\A\/([a-z]+\/)*[a-z0-9]+\.[0-9]+(\.[a-z]+)*\Z/' => new VersionController(),
);

$router = new CustomizableRouter($routes_config);
$main_controller = new MainController();
$main_controller->processRequest($router);