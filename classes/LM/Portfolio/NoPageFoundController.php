<?php

namespace LM\Portfolio;

use LM\WebFramework\Controller\IPageController;
use LM\WebFramework\Request\IPostRequest;
use LM\WebFramework\Request\IRequest;

class NoPageFoundController implements IPageController
{
    public function doGet(IRequest $request): void
    {
        header($_SERVER["SERVER_PROTOCOL"]." 404 Not Found");
    }

    public function doPost(IPostRequest $request): void
    {
    }
}