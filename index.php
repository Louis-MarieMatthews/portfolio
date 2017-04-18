<?php require_once( 'include/html.php' ) ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <?php display_head( 'Home' ) ?>
    </head>
    <body>
        <?php display_fb_js_sdk() ?>
        <?php display_main_navbar( 'home' ) ?>
        <div id="fullpage">
            <div class="section home-section">
                <div class="container">
                    <p>Second-year student in Applied Computing: Human Computer Interaction at the University of Dundee, Scotland.</p>
                </div>
            </div>
            <div class="section programming-section">
                <div class="container">
                    <p>I enthousiastically keep learning new technologies and perfecting my skills, enjoy logical thinking and excel at problem solving. I taught myself HTML5, CSS3, Javascript, PHP, Python and C++ and keep learning online, by reading books and attending conferences such as the Dundee PHP Meetup. I have experience with Wordpress and Bootstrap.</p>
                </div>
            </div>
            <div class="section">
                <div class="container">
                    <p>Although the final deliverable is my absolute priority, I take great care to deliver high-quality code by sytematically applying time-tested programming principles (DRY, SOLID). and design patterns. In regard to web development, I follow the W3C Accessibility Guidelines.</p>
                </div>
            </div>
            <div class="section level-design-and-blender-section">
                <div class="container">
                    <h1>3D Moddeling</h1>
                    <p>I am passionate about creating virtual worlds, this is the reason why I taught myself Blender and created several maps and a mod (a 3D video game using the engine and some of the resources of another video game).</p>
                </div>
            </div>
            <div class="section contact-section">
                <div class="container">
                    <h1 class="section-title">Contact</h1>
                    <div class="row">
                        <div class="col-xs-4"><img width=100% height=auto src="img/GitHub-Mark-120px-plus.png" /></div>
                        <div class="col-xs-4"><img width=100% height=auto src="img/so-icon.png" /></div>
                        <div class="col-xs-4"><img width=100% height=auto src="img/In-2C-128px-TM.png" /></div>
                    </div>
                    <p>GITHUB®, the GITHUB® logo design, OCTOCAT® and the OCTOCAT® logo design are exclusive trademarks registered in the United States by GitHub, Inc. The Stack Exchange name and logos are trademarks of Stack Exchange Inc. The names and logos for sites and products operating on the Stack Exchange network are also trademarks of Stack Exchange Inc. LinkedIn, the LinkedIn logo, the IN logo and InMail are registered trademarks or trademarks of LinkedIn Corporation and its affiliates in the United States and/or other countries. </p>
                </div>
            </div>
        </div>
        <?php display_footer() ?>
    </body>
</html>