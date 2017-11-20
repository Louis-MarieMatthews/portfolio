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
    <h1 class="website-title">Who am I?</h1>
    <p class="line-container"><em class="emphasised">Hi! I'm Louis-Marie.</em></p>
    <p class="line-container">This website presents the different projects I've worked on.</p>
    <p class="line-container">If you want to learn more about me:</p>
    <ul class="standard-list">
      <li class="item"><a class="link" href="">LinkedIn</a></li>
      <li class="item"><a class="link" href="">StackOverflow's Developer Story</a></li>
      <li class="item"><a class="link" href="">GitHub</a></li>
    </ul>
    <p class="line-container">This website was tested for accessibility and responsisvness.</p>
    <section class="project-overview">
      <header class="project-header -quackathon">
        <div class="content">
          <h2 class="title">Quackathon (University of Dundee's Hackathon)</h2>
          <ul class="links-list">
            <li class="item"><a class="link" href="https://github.com/Team-Ecosse/quackathon"><img class="logo" src="img/github.png"></a></li>
          </ul>
        </div>
      </header>
      <p class="line-container">We were a team of four.</p>
      <p class="line-container">Our challenge was to make a game controlled by the player's voice in 24 hours.</p>
      <p class="line-container">The loudest the player, the higher the duck jumps (to collect items or avoid obstacles). To flip, the player must make a very precise pitch.</p>
      <p class="line-container">The biggest difficulties for me were to extract the pitch from the voice input and detect pitch patterns to decide if the duck should flip or not.</p>
    </section>
    <section class="project-overview">
      <header class="project-header -codeforgood">
        <div class="content">
          <h2 class="title">Code for Good (J.P. Morgan's Hackathon)</h2>
        </div>
      </header>
      <p class="line-container">We were six.</p>
      <p class="line-container">Our challenge was to make existing websites more accessible for blind people and people with low vision.</p>
      <p class="line-container">We developped a Chrome extension summarising the page's content and extracting the main sections of the page to allow the user to quickly jump to a specific part of the page.</p>
      <p class="line-container">Part of my job included making sure everyone's work would fit together and creating an algorithm to extract the main sections of any page when they do not use ARIA technologies or HTML5.</p>
      <p class="line-container">With a certain degree of precision, the algorithm detects if a section of the page is the main section or the navigation bar based on its place in the page's hierarchy and on the number of elements that do not contain any links.</p>
    </section>
    <section class="project-overview">
      <header class="project-header -yummycoffee">
        <div class="content">
          <h2 class="title">Web Developer at Yummy Coffee</h2>
        </div>
      </header>
      <p class="line-container">I worked as a web developer for Yummy Coffee from June till August 2017.</p>
      <p class="line-container">I was responsible for the entire development process of full-stack websites as well as PrestaShop and WordPress themes.</p>
      <p class="line-container">I learnt and used several programming practices and web development guidelines, such as <a href="https://www.youtube.com/watch?v=8d2AtAGJPno">Extremely Defensive PHP</a>, <a href="http://rscss.io">RSCSS</a>, and <a href="https://www.lukew.com/ff/entry.asp?933">Mobile First design</a>.</p>
      <p class="line-container">Part of the work I did included:</p>
      <ul class="standard-list">
        <li class="item"><a class="link" href="http://91.121.16.158/ohlouis/fmp/">a website for selling cars online made using a database-driven approach</a>,</li>
        <li class="item"><a class="link" href="http://www.mytransport.paris">a website for a taxi company</a>,</li>
        <li class="item"><a class="link" href="http://blog.paysdesdelices.com">adding a dynamic translation system to WordPress</a>,</li>
        <li class="item"><a class="link" href="http://91.121.16.158/ohlouis/layal/fr/blog/layal-mag-c24.html">revamping a PrestaShop theme and adding a blog section to it</a>.</li>
      </ul>
    </section>
    <section class="project-overview">
      <header class="project-header -insidertrading">
        <div class="content">
          <h2 class="title">Insider</h2>
          <ul class="links-list">
            <li class="item"><a class="link" href="https://github.com/matthewslouismarie/insidertrading"><img class="logo" src="img/github.png"></a></li>
          </ul>
        </div>
      </header>
      <p class="line-container">This is the game I had to make as part of the Games Programming's module assignment in second year.</p>
      <p class="line-container">I taught myself C++ instead of Unity as I thought the former is more useful to know.</p>
      <div class="media-container">      
        <div class="video-wrapper">
          <iframe class="iframe" width="560" height="315" src="https://www.youtube.com/embed/-8LdjKoZM4s?rel=0" frameborder="0" allowfullscreen></iframe>
        </div>
      </div>
    </section>
    <section class="project-overview">
      <header class="project-header -shifttwo">
        <div class="content">
          <h2 class="title">Shift-Two</h2>
          <ul class="links-list">
            <li class="item"><a class="link" href="http://www.moddb.com/mods/shift-two1"><img class="logo" src="img/moddb.png"></a></li>
          </ul>
        </div>
      </header>
      <p class="line-container">Shift-Two is a mod that I made on my free time when I was in secondary school.</p>
      <p class="line-container">I taught myself HTML, CSS, but more importantly 3D modelling.</p>
      <p class="line-container">The technology used being old, poorly documented, and closed-source, I also gained a lot of experience in learning through trial-and-errors and not rely on community support and documentation.</p>
      <div class="media-container">
        <div class="video-wrapper">
          <iframe class="iframe" width="560" height="315" src="https://www.youtube.com/embed/Nl5L2lhoPA4?rel=0" frameborder="0" allowfullscreen></iframe>
        </div>
      </div>
    </section>
  </body>
</html>
<?php
    }
}