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
                    <h1 class="section-title">Hi</h1>
                    <p>My name is LM Matthews, an Applied Computing: Human Computer Interaction student at the University of Dundee, Scotland.</p>
                    <p>Like some other fellows, I taught myself most of my computing skills. However, these are not limited to web development and coding. I have as well experience in 3D mapping and modelling and I released my very own mini video game.</p>
                </div>
            </div>
            <div class="section level-design-and-blender-section">
                <div class="container">
                    <div class="row">
                        <div class="xs-hidden col-sm-7">
                            <img src="img/mapping-example.jpg" width=100% />
                        </div>
                        <div class="col-xs-12 col-sm-5">
                            <h1 class="section-title">Level Design & Blender</h1>
                            <p>My first experience with 3D modelisation goes back in 2010. This is when I discovered how 3D objects and environments in video games where made thanks to a tutorial 
                            of OpenClassrooms.</p>
                            <p>I became passionate about creating my own 3D worlds and this culminated in the release of my very own video game, Shift-Two, in April 2011.
                            Shift-Two is a mod, which means it is a video game reusing a variable amount of assets from a another video game, in this case Half-Life 1. The mod brings new levels,
                            a different storyset and new textures to the original game. I was willing to create a website for my mod, and this was the perfect occasion to get a first glimpse into
                            web development. I learnt HTML and CSS and used these technologies to create my very first website.</p>
                            <p>I continued to practice mapping over the following years (and tried to gather and strengthen the level designers community). I jumped into the next step which was
                            learn Blender in 2014 in order to bring more details to my levels.
                            This powerful software, very different from Valve Hammer Editor (the software used to create levels for Half-Life 1 games), was challenging to learn.
                            Also challenging was the integration of my Blender models in levels designed for a game engine about 20 years old. This required using softwares and plugins to convert
                            my files from the .blend format to the .mdl format, used by my mod.</p>
                            <p>The idea of using my skills to recreate my house was floating in my mind for quite a long time. The proposal of a new online community mod was for me a chance to 
                            bring that idea to reality. This involved a lot of work over the summer. I had to take the dimensions of an important amount of objects in my house in order to recreate
                            them in my map. In addition to being decoration, they also provided me with a visual clue of the dimension of the structure of my level, and I was able to use them
                            as some sort of landmarks in order to get the dimensions of my walls, floors and ceilings correct.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section programming-section">
                <div class="container">
                    <h1 class="section-title">Patterns. Efficiency. Readibiliy.</h1>
                    <p>The first programming language I learnt was PHP, reading a tutorial of OpenClassrooms.
                    Its simple syntax made it a perfect introduction to programming languages for me.
                    Although I did not learn it for any specific purposes, it would later prove extremely useful as it allowed me to be prepared for some university assignments, 
                    become the webmaster of Dundee University Review of the Arts and also understand the logic of a programming languages, making learning other languages much
                    more easier.</p>
                    <p>I learnt Java, ASP.NET, Arduino and Processing as part of my university course. In second year, we were tasked to make a video game using the technology
                    of our choice. I decided to learn C++ and use Allegro to draw 2D graphics as it was the perfect opportunity for me to learn and gain experience in this 
                    ubiquitous language, which would afterwards allow me to learn OpenGL and contribute to community projects related to Half-Life 1 modding.</p>
                </div>
            </div>
            
            <div class="section contact-section">
                <div class="container">
                    <h1 class="section-title">Contact</h1>
                    <ul>
                        <li><a href="https://github.com/Louis-MarieMatthews">GitHub</a></li>
                        <li><a href="http://stackoverflow.com/users/7089212/louis-marie-matthews">Stack Overflow</a></li>
                        <li><a href="https://www.linkedin.com/in/louis-marie-matthews/">LinkedIn</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <?php display_footer() ?>
    </body>
</html>