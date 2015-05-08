<?php

use Slim\Slim;
use Slim\Views\Twig;
use Slim\Views\TwigExtension;

require_once '../vendor/autoload.php';

$app = new Slim([
    'view' => new Twig()
]);

// Database
$app->container->singleton('db', function() {
    return new PDO('mysql:host=127.0.0.1;dbname=jpsample', 'root', '');
});

// Views
$view = $app->view();
$view->setTemplatesDirectory('../app/views');
$view->parserExtensions = [
    new TwigExtension()
];

require_once 'routes.php';

$app->run();