<?php

namespace LM\Portfolio;

class HomeHtmlView extends TemplateHtmlView
{
    public function display(): void
    {
?>
<!doctype html>
<html <?php parent::displayHeadAttrs() ?>>
  <head>
    <meta charset="utf-8">
    <title>Louis-Marie Matthews's Portfolio</title>
    <link rel="amphtml" href="https://<?= htmlspecialchars($_SERVER['SERVER_NAME']) ?>/amp">
    <link rel="stylesheet" href="style.min.css">
    <?php $this->displayHeadContent() ?>
  </head>
  <body <?php $this->displayBodyAttrs() ?>>
    <?php $this->displayBodyContent() ?>
  </body>
</html>
<?php
    }
}