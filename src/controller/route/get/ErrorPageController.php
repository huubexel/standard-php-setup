<?php

declare(strict_types=1);

namespace src\controller\route\get;

class ErrorPageController extends AbstractGetController
{

    public function __construct()
    {
        print_r('Massive error');
    }

}
