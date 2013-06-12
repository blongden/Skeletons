<?php
/**
 * Class IndexController
 * @author Ben Longden
 */

namespace Nocarrier\Controller;

use Silex\Application;
use Symfony\Component\HttpFoundation\Request;

class IndexController
{
    public function indexAction(Request $request, Application $app)
    {
        return $app['twig']->render('index.twig');
    }
}

