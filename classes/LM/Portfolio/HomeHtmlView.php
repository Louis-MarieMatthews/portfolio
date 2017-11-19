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
    <section class="project-overview -quackathon">
      <header class="project-header">
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
  </body>
</html>
<?php
    }
}