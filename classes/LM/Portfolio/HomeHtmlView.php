<?php

namespace LM\Portfolio;

use LM\WebFramework\View\IView;

class HomeHtmlView implements IView
{
	  public function display(): void
    {
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Home</title>
    <link rel="stylesheet" src="style.min.css">
  </head>
  <body>
    <h1>Hello</h1>
  </body>
</html>
<?php
    }
}