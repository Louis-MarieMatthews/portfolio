<?php

function display_head( $title ) {
    ?>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <?php // TODO: do metadata and OG ?>
    <title><?php echo( $title ) ?></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <link rel="stylesheet" href="owlcarousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="owlcarousel/assets/owl.theme.default.min.css">

    <link rel="stylesheet" href="style.css" />

    <link rel="stylesheet" type="text/css" href="fullpagejs/jquery.fullpage.min.css" />



    <?php
}



function display_main_navbar() {
    ?>
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Louis-Marie Matthews</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#top">Home</a></li>
            <li><a href="#community">Community</a></li>
            <li><a href="#level-design-and-blender">Level Design & Blender</a></li>
            <li><a href="#programming">Programming</a></li>
            <li><a href="#contact">Contact</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
    <?php
}



function display_carousel() {
  // TODO: accessibility (img)
    ?>
    <div class="owl-carousel">
        <figure>
            <img src="img/half-life-and-mods-cover.jpg" />
            <figcaption>Co-leader of an online community project primarily aiming at delivering level-design video-tutorials</figcaption>
        </figure>
        <figure>
          <img src="img/code-example-cropped.jpg" />
          <figcaption>Confident with PHP, Java, Python, C++ and ASP.NET</figcaption>
        </figure>
        <figure>
          <img src="img/mapping-example-2-cropped.jpg" />
          <figcaption>+7 years of experience in level design and +2 years of experience with Blender</figcaption>
        </figure>
    </div>
    <?php
}



function display_footer() {
    ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script> 
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script src="owlcarousel/owl.carousel.min.js"></script>
    <script type="text/javascript" src="fullpagejs/jquery.fullpage.min.js"></script>
    <script>
        $(document).ready(function(){
            $(".owl-carousel").owlCarousel({
              items: 1
            });
        });
        $(document).ready(function() {
            $('#fullpage').fullpage();
        });
    </script>
    <?php
}