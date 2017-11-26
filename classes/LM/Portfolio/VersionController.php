<?php

namespace LM\Portfolio;

use LM\WebFramework\Controller\IPageController;
use LM\WebFramework\Request\IPostRequest;
use LM\WebFramework\Request\IRequest;

class VersionController implements IPageController
{
    
	public function doGet(IRequest $request): void
    {
        $uri_parameters = explode('.', $request->getUri());
        $filename = PORTFOLIO_ROOT.$uri_parameters[0];
        for ($i = 2; $i < count($uri_parameters); $i++) {
            $filename .= '.'.$uri_parameters[$i];
        }
        $extension = $uri_parameters[count($uri_parameters) - 1];
        header('content-type: '.$this->getMimeType($filename, $extension));
        echo file_get_contents($filename);
    }

	public function doPost(IPostRequest $postData): void
    {
    }

    private function getMimeType(string $filename, string $extension): string
    {
        $mime_type = mime_content_type($filename);
        if ('text/plain' === $mime_type && 'css' === $extension) {
            return 'text/css';
        }
        return $mime_type;
    }
}
