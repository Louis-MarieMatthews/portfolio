<?php

namespace LM\Portfolio;

class AmpHomeHtmlView extends TemplateHtmlView
{
    public function display(): void
    {
?>
<!doctype html>
<html ⚡ <?php parent::displayHeadAttrs() ?>>
  <head>
    <meta charset="utf-8">
    <script async src="https://cdn.ampproject.org/v0.js"></script>
    <script async custom-element="amp-youtube" src="https://cdn.ampproject.org/v0/amp-youtube-0.1.js"></script>
    <title>Louis-Marie Matthews's Portfolio</title>
    <link rel="canonical" href="https://<?= htmlspecialchars($_SERVER['SERVER_NAME']) ?>">
    <meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1">
    <style amp-boilerplate>body{-webkit-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-moz-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-ms-animation:-amp-start 8s steps(1,end) 0s 1 normal both;animation:-amp-start 8s steps(1,end) 0s 1 normal both}@-webkit-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-moz-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-ms-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-o-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}</style><noscript><style amp-boilerplate>body{-webkit-animation:none;-moz-animation:none;-ms-animation:none;animation:none}</style></noscript>
    <style amp-custom>
      <?php include 'amp-style.min.css' ?>
    </style>
    <?php parent::displayHeadContent() ?>
  </head>
  <body>
    <?php parent::displayBodyContent() ?>
  </body>
</html>
<?php
    }

    public function displayImg(string $attrs): void
    {
        echo '<amp-img width="30" height="30" '.$attrs.'>';
    }

    public function displayYoutubeVideo(string $id): void
    {
?>
<amp-youtube
  data-videoid="<?= $id ?>"
  layout="responsive"
  width="560"
  height="315">
  <div fallback>
    <p>The video could not be loaded.</p>
  </div>
</amp-youtube>
<?php
    }
}