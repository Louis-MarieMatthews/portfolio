<?php

namespace LM\Portfolio;

use LM\WebFramework\View\IView;

class AmpHomeHtmlView implements IView
{
    private $template;

    public function __construct()
    {
        $this->template = new TemplateHtmlView();
    }

    public function display(): void
    {
        $this->template->display();
    }
}