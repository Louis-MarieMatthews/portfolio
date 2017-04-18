<?php require_once( 'include/html.php' ) ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <?php display_head( 'Home' ) ?>
    </head>
    <body>
        <?php display_main_navbar( 'home' ) ?>
        <div id="fullpage">
            <div id="home" class="section home-section">
                <div class="container">
                    <p>Second-year student in Applied Computing: Human Computer Interaction at the University of Dundee, Scotland.</p>
                    <p>I enthousiastically keep learning new technologies and perfecting my skills, enjoy logical thinking and excel at problem solving.</p>
                </div>
            </div>
            <div id="programming" class="section programming-section">
                <div class="container">
                    <p>I taught myself HTML5, CSS3, Javascript, PHP, Python and C++ and keep learning either online, or by reading books and attending conferences such as the Dundee PHP Meetup.</p>
                </div>
            </div>
            <div id="thoroughness" class="section thoroughness-section">
                <div class="container">
                    <p>Although the final deliverable is my absolute priority, I take great care to deliver high-quality code by sytematically applying time-tested programming principles (DRY, SOLID). and design patterns. In regard to web development, I follow the W3C Accessibility Guidelines and ensure my websites are responsive.</p>
                </div>
            </div>
            <div id="level-design-and-blender" class="section level-design-and-blender-section">
                <div class="container">
                    <p>I am passionate about creating virtual worlds, this is the reason why I taught myself Blender and created several maps and a mod (a 3D video game using the engine and some of the resources of another video game).</p>
                </div>
            </div>
        </div>
        <?php display_footer() ?>
    </body>
</html>