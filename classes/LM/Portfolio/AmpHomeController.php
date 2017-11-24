<?php

namespace LM\Portfolio;

use LM\WebFramework\Controller\IPageController;

class AmpHomeController implements IPageController
{
    public function doGet(): void
    {
        $view = new AmpHomeHtmlView();
        $view->display();
    }

    public function doPost(array $post_data): void
    {

    }
}