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
                    <?php display_carousel() ?>
                </div>
            </div>
            <div class="section community-section">
                <div class="container">
                    <h1>Community</h1>
                    <div class="row">
                        <div class="col-xs-12 col-sm-8">
                            <p>As I was learning, and later practising level design, I noticed level designers and resources for Half-Life 1, such as tutorials, were scattered 
                            accross a variety of small websites, threateting the community and the creations of everywhone. Beside, it was sometimes hard for beginners to know
                            where to start and what community to join.</p>
                            <p>This is why, with a few other members of the website OpenClassrooms, we decided to create a website aimed at gathering all the level designers for 
                            any Goldsource games (including Half-Life 1), and creating and sharing resources such as video tutorials.</p>
                            <p>The website is unavailable at the moment, but a new version of it is in preparation. In the meantime, we've still got our Youtube channel onto which 
                            I upload video tutorials I make, our Steam group composed of level designers I found and contacted accross the Internet, and our Facebook, Twitter and
                            Google+ pages, where I regularly share new contents related to the Goldsource world.</p>
                            <div class="row">
                                <div class="col-xs-4 social twitter"><a class="social-link" href="https://twitter.com/loulimibarney">Twitter</a></div>
                                <div class="col-xs-4 social googleplus"><a class="social-link" href="https://plus.google.com/">Google+</a></div>
                                <div class="col-xs-4 social youtube"><a class="social-link" href="https://www.youtube.com/channel/UCNMCIRURostCQWVxD8iLngA">Youtube</a></div>
                            </div>
                        </div>
                        <div class="col-xs-hidden col-sm-4">
                            <?php display_fb_page() ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section level-design-and-blender-section">
                <div class="container">
                    <h1>Level Design & Blender</h1>
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
            <div class="section programming-section">
                <div class="container">
                    <h1>Programming</h1>
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
                    <h1>Contact</h1>
                    <ul>
                        <li><a href="https://github.com/Louis-MarieMatthews">GitHub</a></li>
                        <li><a href="http://stackoverflow.com/users/7089212/louis-marie-matthews">Stack Overflow</a></li>
                        <li><a href="https://www.linkedin.com/in/louis-marie-matthews/">LinkedIn</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="home-background">
        </div>
        <div class="community-background">
        </div>
        <div class="level-design-and-blender-background">
        </div>
        <div class="programming-background">
        </div>
        <div class="contact-background">
        </div>
        <?php display_footer() ?>
    </body>
</html>