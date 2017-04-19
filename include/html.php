<?php

function display_head( $title ) {
    ?>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <?php // TODO: do metadata and OG ?>
    <title><?php echo( $title ) ?></title>
    <link rel="icon" href="img/favicon.ico" />
    <meta property="og:title" content="<?php echo( $title ) ?>" />
    <meta property="og:type" content="profile" />
    <meta property="og:first_name" content="Louis-Marie" />
    <meta property="og:last_name" content="Matthews" />
    <meta property="og:gender" content="male" />
    <meta property="og:url" content="http://shift-two.alwaysdata.net/portfolio/" />
    <meta property="og:description" content="Portfolio of Louis-Marie Matthews." />
    <meta property="og:determiner" content="the" />
    <meta property="og:locale" content="en_GB" />
    <meta property="og:image" content="http://shift-two.alwaysdata.net/portfolio/img/louis-marie.jpg" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <link rel="stylesheet" href="owlcarousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="owlcarousel/assets/owl.theme.default.min.css">

    <link rel="stylesheet" type="text/css" href="fullpagejs/jquery.fullpage.min.css" />

    <link rel="stylesheet" href="style.css" />

    <?php
}



function display_main_navbar() {
    ?>
    <nav class="navbar navbar-inverse navbar-fixed-top" aria-label="Page navigation menu">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="main-navbar-link main-navbar-link-for-me" class="active"><a href="#me">Me</a></li>
            <li class="main-navbar-link main-navbar-link-for-shift-two" ><a href="#shift-two">Shift-Two</a></li>
            <li class="main-navbar-link main-navbar-link-for-dura" ><a href="#dura">Dundee University Review of the Arts</a></li>
            <li class="main-navbar-link main-navbar-link-for-java-and-php"><a href="#java-and-php">Java & PHP</a></li>
            <li class="main-navbar-link main-navbar-link-for-twhl-hub"><a href="#twhl-hub">TWHL Hub</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
    <?php
}



function display_footer() {
    ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script> 
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script src="owlcarousel/owl.carousel.min.js"></script>
    <script type="text/javascript" src="fullpagejs/jquery.fullpage.min.js"></script>
    <script>
        $(document).ready(function() {
            var sections = ['me', 'shift-two', 'dura', 'java-and-php', 'twhl-hub'];
            $('.section-heading').css('opacity', '0.5');
            $('#fullpage').fullpage({
                anchors: ['me', 'shift-two', 'dura', 'java-and-php', 'twhl-hub'],
                afterLoad: function(anchorLink, index) {
                    var loadedSection = $(this);
                    $('.active-pf-section').removeAttr('style');
                    $('.active-pf-section').css('opacity', 0.5);
                    $('.active-pf-section').removeClass('active-pf-section');
                    $('#pf-' + anchorLink + '-section-heading').addClass ('active-pf-section');
                    $('.active-pf-section').css('margin-right', '5%');
                    $('.active-pf-section').css('opacity', 1);
                    var R = Math.floor(Math.random() * 255);
                    var G = Math.floor(Math.random() * 255);
                    var B = Math.floor(Math.random() * 255);
                    console.log('rgb(' + R + ', ' + G + ', ' + B + ')');
                    $('.pf-section-content').css('border-color', 'rgb(' + R + ', ' + G + ', ' + B + ')');
                    
                    $('.main-navbar-link.active').removeClass('active');
                    $('.main-navbar-link-for-' + anchorLink).addClass('active');
                }
            });
        });
    </script>
    <?php
}