<?php
$router = $di->get("router");

foreach ($application->getModules() as $key => $module) {
    //$namespace = $module["namespace"];
    $router->add('/'.$key.'/:params', array(
        'namespace' => $module["namespace"],
        'module' => $key,
        'controller' => 'index',
        'action' => 'index',
        'params' => 1
    ))->setName($key);
    $router->add('/'.$key.'/:controller/:params', array(
        'namespace' => $module["namespace"],
        'module' => $key,
        'controller' => 1,
        'action' => 'index',
        'params' => 2
    ));
    $router->add('/'.$key.'/:controller/:action/:params', array(
        'namespace' => $module["namespace"],
        'module' => $key,
        'controller' => 1,
        'action' => 2,
        'params' => 3
    ));
}