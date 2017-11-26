<?php

namespace LM\Portfolio;

use LM\WebFramework\Controller\IPageController;
use LM\WebFramework\Request\IPostRequest;
use LM\WebFramework\Request\IRequest;

class HomeController implements IPageController
{
	public function doGet(IRequest $request): void
    {
        $view = new HomeHtmlView();
        $view->display();
    }

	public function doPost(IPostRequest $postData): void
    {

    }
}
