<?php

declare(strict_types=1);

namespace src\controller\route\get;

use src\model\CssLinksFactory;
use src\model\RenderFile;

class HomeController extends AbstractGetController
{

    public function __construct()
    {
        $title = 'Homepage';
        $cssLinks = CssLinksFactory::getLinks(["default.css"]);

        RenderFile::render('src/view/sections/header.php', ['title' => $title, 'cssLinks' => $cssLinks]);
        RenderFile::render('src/view/homepage.php');
        RenderFile::render('src/view/sections/footer.php');
    }

}
