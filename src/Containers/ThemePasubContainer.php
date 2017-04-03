<?php

namespace ThemePasub\Containers;

use Plenty\Plugin\Templates\Twig;

class ThemePasubContainer
{
    public function call(Twig $twig):string
    {
        return $twig->render('ThemePasub::views.content.Theme');
    }
}
