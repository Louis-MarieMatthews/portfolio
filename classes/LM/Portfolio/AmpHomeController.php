<?php

namespace LM\Portfolio;

use LM\WebFramework\Controller\IPageController;
use LM\WebFramework\Request\IPostRequest;
use LM\WebFramework\Request\IRequest;
use LM\WebFramework\Routing\UriBuilder;

class AmpHomeController implements IPageController
{
    public function doGet(IRequest $request): void
    {
        $view = new AmpHomeHtmlView();
        $view->display();
    }

    public function doPost(IPostRequest $post_data): void
    {

    }
}