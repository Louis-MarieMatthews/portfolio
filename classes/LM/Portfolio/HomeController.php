<?php

namespace LM\Portfolio;

use LM\WebFramework\Controller\IPageController;

class HomeController implements IPageController
{
	public function doGet(): void
    {
        $view = new HomeHtmlView();
        $view->display();
    }

	public function doPost(array $postData): void
    {

    }
}
