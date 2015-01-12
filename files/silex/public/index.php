<?php
require_once '../vendor/autoload.php';

use Silex\Application;

$app = new Application();
$app['debug'] = true;

$app->register(
    new Silex\Provider\TwigServiceProvider(),
    array(
        'twig.path' => __DIR__.'/../views',
    )
);

if ($app['debug']) {
    $app->register(new Whoops\Provider\Silex\WhoopsServiceProvider);
}

$app->get('/', 'Nocarrier\Controller\IndexController::indexAction');

$app->run();
