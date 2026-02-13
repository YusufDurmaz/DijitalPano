<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->group("{locale}/panel", static function ($routes) {
    $routes->get("/", "Home::index", [
        "as" => "dashboard",
        "filter" => "permission:dashboard.view",
    ]);
    $routes->get("preview", "PreviewController::index", [
        "as" => "preview",
        "filter" => "permission:dashboard.view",
    ]);
    $routes->get("settings", "AppConfigController::index", [
        "as" => "settings",
        "filter" => "permission:dashboard.view",
    ]);
});

$routes->group("{locale}/panel", static function ($routes) {
    service("auth")->routes($routes);
});

$routes->get("{locale}", "BoardController::index", [
    "as" => "board",
    "filter" => "permission:dashboard.view",
]);
