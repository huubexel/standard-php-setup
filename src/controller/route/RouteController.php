<?php

declare(strict_types=1);

namespace src\controller\route;

use src\controller\route\get\AbstractGetController;
use src\controller\route\get\ErrorPageController;
use src\controller\route\post\AbstractPostController;
use src\model\RoutesFactory;

class RouteController
{

    public static function routeUser(): void
    {
        if (count($_POST) > 0) {
            $routes = RoutesFactory::getRoutesPost();
            if (!str_ends_with($_POST['route'], '/')) {
                $_POST['route'] .= '/';
            }
            RouteController::getController($_POST['route'], $routes);
        } else {
            $routes = RoutesFactory::getRoutesGet();
            if (!str_ends_with($_SERVER['REQUEST_URI'], '/')) {
                $_SERVER['REQUEST_URI'] .= '/';
            }
            RouteController::getController($_SERVER['REQUEST_URI'], $routes);
        }
    }

    public static function getController(string $route, array $routes): AbstractGetController|AbstractPostController
    {
        if (array_key_exists($route, $routes)) {
            return (new $routes[$route]);
        } else {
            return (new ErrorPageController());
        }
    }

}
