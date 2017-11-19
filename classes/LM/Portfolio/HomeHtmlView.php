<?php

namespace LM\Portfolio;

use LM\WebFramework\View\IView;

class HomeHtmlView implements IView
{
	  public function display(): void
    {
?>
<!DOCTYPE html>
<html class="website-container" lang="en">
  <head>
    <meta charset="utf-8">
    <title>Home</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">
    <link rel="stylesheet" href="style.min.css">
  </head>
  <body class="website">
    <h1>Who am I?</h1>
    <p>Hi! I'm Louis-Marie.</p>
    <p>This website presents the different projects I've worked on.</p>
    <p>If you want to learn more about me:</p>
    <ul>
      <li>LinkedIn</li>
      <li>StackOverflow's Developer Story</li>
      <li>GitHub</li>
    </ul>
    <p>This website was tested for accessibility and responsisvness. Lrean more.</p>
    <section class="project-overview">
      <header class="project-header -quackathon">
        <div class="content">
          <h2 class="title">Quackathon (University of Dundee's Hackathon)</h2>
          <ul class="links-list">
            <li class="item"><a class="link" href="https://github.com/Team-Ecosse/quackathon"><img class="logo" src="img/GitHub-Mark-Light-120px-plus.png"></a></li>
          </ul>
        </div>
      </header>
      <p class="sentence">We were a team of four.</p>
      <p class="sentence">Our challenge was to make a game controlled by the player's voice in 24 hours.</p>
      <p class="sentence">The loudest the player, the higher the duck jumps (to collect items or avoid obstacles). To flip, the player must make a very precise pitch.</p>
      <p class="sentence">The biggest difficulties for me were to extract the pitch from the voice input and detect pitch patterns to decide if the duck should flip or not.</p>
    </section>
    <section class="project-overview">
      <header class="project-header -codeforgood">
        <div class="content">
          <h2 class="title">Code for Good (J.P. Morgan's Hackathon)</h2>
        </div>
      </header>
      <p class="sentence">We were six.</p>
      <p class="sentence">Our challenge was to make existing websites more accessible for blind people and people with low vision.</p>
      <p class="sentence">We developped a Chrome extension summarising the page's content and extracting the main sections of the page to allow the user to quickly jump to a specific part of the page.</p>
      <p class="sentence">Part of my job included making sure everyone's work would fit together and creating an algorithm to extract the main sections of any page when they do not use ARIA technologies or HTML5.</p>
      <p class="sentence">With a certain degree of precision, the algorithm detects if a section of the page is the main section or the navigation bar based on its place in the page's hierarchy and on the number of elements that do not contain any links.</p>
    </section>
    <section class="project-overview">
      <header class="project-header -yummycoffee">
        <div class="content">
          <h2 class="title">Web Developer at Yummy Coffee</h2>
        </div>
      </header>
      <p class="sentence">I worked as a web developer for Yummy Coffee from June till August 2017.</p>
      <p class="sentence">I was responsible for the entire development process of full-stack websites as well as PrestaShop and WordPress themes.</p>
      <p class="sentence">I learnt and used several programming practices and web development guidelines, such as <a href="https://www.youtube.com/watch?v=8d2AtAGJPno">Extremely Defensive PHP</a>, <a href="http://rscss.io">RSCSS</a>, and <a href="https://www.lukew.com/ff/entry.asp?933">Mobile First design</a>.</p>
      <p class="sentence">Part of the work I did included:</p>
      <ul>
        <li><a href="http://91.121.16.158/ohlouis/fmp/">a website for selling cars online made using a database-driven approach</a>,</li>
        <li><a href="http://www.mytransport.paris">a website for a taxi company</a>,</li>
        <li><a href="http://blog.paysdesdelices.com">adding a dynamic translation system to WordPress</a>,</li>
        <li><a href="http://91.121.16.158/ohlouis/layal/fr/blog/layal-mag-c24.html">revamping a PrestaShop theme and adding a blog section to it</a>.</li>
      </ul>
    </section>
    <section class="project-overview">
      <header class="project-header -insidertrading">
        <div class="content">
          <h2 class="title">Insider</h2>
        </div>
      </header>
      <p class="sentence">This is the game I had to make as part of the Games Programming's module assignment in second year.</p>
      <p class="sentence">I taught myself C++ instead of Unity as I thought the former is more useful to know.</p>
      <iframe width="560" height="315" src="https://www.youtube.com/embed/-8LdjKoZM4s?rel=0" frameborder="0" allowfullscreen></iframe>
      
    </section>
  </body>
</html>
<?php
    }
}