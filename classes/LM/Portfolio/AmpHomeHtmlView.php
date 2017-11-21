<?php

namespace LM\Portfolio;

use LM\WebFramework\View\IView;

class AmpHomeHtmlView implements IView
{
    private $home;

    public function __construct(HomeHtmlView $home)
    {
        $this->home = $home;
    }

    public function display(): void
    {
        $home->display();
    }
}