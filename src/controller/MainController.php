<?php

declare(strict_types=1);

namespace src\controller;

use src\controller\route\RouteController;

class MainController
{

    public static function main(): void
    {
        RouteController::routeUser();
    }

}
