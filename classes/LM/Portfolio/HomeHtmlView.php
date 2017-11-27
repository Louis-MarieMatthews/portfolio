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
    <link rel="stylesheet" href="<?= $this->getVersionedUri('/style', '.min.css') ?>">
    <?php $this->displayHeadContent() ?>
  </head>
  <body <?php $this->displayBodyAttrs() ?>>
    <script>
      window.fbAsyncInit = function() {
        FB.init({
          appId      : '2013357305611860',
          cookie     : true,
          xfbml      : true,
          version    : 'v2.11'
        });
          
        FB.AppEvents.logPageView();   
          
      };

      (function(d, s, id){
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) {return;}
        js = d.createElement(s); js.id = id;
        js.src = "https://connect.facebook.net/en_US/sdk.js";
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));
    </script>
    <?php $this->displayBodyContent() ?>
  </body>
</html>
<?php
    }
}