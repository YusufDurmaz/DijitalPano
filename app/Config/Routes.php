<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->group("{locale}/panel", static function ($routes) {
    $routes->get("/", "Home::index", [
        "as" => "home",
        "filter" => "permission:dashboard.view",
    ]);
});

$routes->group("{locale}/panel", static function ($routes) {
    service("auth")->routes($routes);
});
