<?php

use Slim\Container;

$container = $app->getContainer();

$container['view'] = function (Container $container) {
    $settings = $container->get('settings')['view'];

    $view = new \Slim\Views\Twig($settings['path'], $settings['twig']);
    $view->addExtension(new Slim\Views\TwigExtension(
    $container->router,
    $container->request->getUri()
    ));
    if (@$_SESSION['g']) {
        $view->getEnvironment()->addGlobal('g', $_SESSION['g']);
    }  

    return $view;
};





 ?>
