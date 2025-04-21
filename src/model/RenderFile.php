<?php

namespace src\model;

class RenderFile
{

    public static function render(string $filename, array $variables = []): void
    {
        extract($variables);
        require_once $filename;
    }

}
