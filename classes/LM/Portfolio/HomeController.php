<?php

namespace LM\Portfolio;

use LM\WebFramework\Controller\IPageController;

class HomeController implements IPageController
{
	public function doGet(): void
    {
        echo 'yo';
    }

	public function doPost(array $postData): void
    {

    }
}
