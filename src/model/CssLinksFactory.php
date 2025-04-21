<?php

declare(strict_types=1);

namespace src\model;

class CssLinksFactory
{

    public static function getLinks(array $links): string
    {
        $cssLinks = "";
        foreach ($links as $link) {
            $cssLinks .= "<link rel=\"stylesheet\" href=\"/assets/css/" . $link . "\">" . PHP_EOL . "    ";
        }

        return rtrim($cssLinks) . PHP_EOL;
    }

}
