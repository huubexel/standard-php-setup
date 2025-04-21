<?php

declare(strict_types=1);

namespace src\model;

use src\controller\route\get\AboutController;
use src\controller\route\get\AbstractGetController;
use src\controller\route\get\ErrorPageController;
use src\controller\route\get\HomeController;
use src\controller\route\post\AbstractPostController;
use src\controller\route\post\ContactFormController;

class RoutesFactory
{

    /**
     * @return array<string, AbstractGetController>
     */
    public static function getRoutesGet(): array
    {
        return [
            '/' => HomeController::class,
            '/about/' => AboutController::class,
            '/error/' => ErrorPageController::class,
        ];
    }

    /**
     * @return array<string, AbstractPostController>
     */
    public static function getRoutesPost(): array
    {
        return [
            '/contact/' => ContactFormController::class,
        ];
    }

}
