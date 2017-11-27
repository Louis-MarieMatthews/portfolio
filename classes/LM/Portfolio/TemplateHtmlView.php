<?php

namespace LM\Portfolio;

use LM\WebFramework\Routing\UriBuilder;
use LM\WebFramework\View\IView;

class TemplateHtmlView implements IView
{
    public function display(): void
    {
?>
<!DOCTYPE html>
<html <?php $this->displayHeadAttrs() ?>>
  <head>
    <meta charset="utf-8">
    <?php $this->displayHeadContent() ?>
  </head>
  <body <?php $this->displayBodyAttrs() ?>>
    <?php $this->displayBodyContent() ?>
  </body>
</html>
<?php
    }

    public function displayBodyAttrs()
    {
        echo 'class="page-content-container" itemscope itemtype="http://schema.org/CollectionPage"';
    }

    public function displayBodyContent()
    {
?>
<header itemscope itemprop="author" itemtype="http://schema.org/Person">
  <h1 class="page-title">Who am I?</h1>
  <div class="content-container">
    <p class="line-container"><em class="emphasised">Hi! I'm <span itemprop="name">Louis-Marie</span>.</em></p>
    <div class="line-container">
      <ul class="links-list -leftaligned">
          <li class="item"><a class="link" href="https://www.linkedin.com/in/matthewslouismarie/"><?php $this->displayImg('alt="My LinkedIn profile" src="'.$this->getVersionedUri('img/linkedin', '.png').'"', false) ?></a></li>
          <li class="item"><a class="link" href="https://stackoverflow.com/story/matthewslouismarie"><?php $this->displayImg('alt="My Stack Overflow developer story" src="'.$this->getVersionedUri('img/stackoverflow', '.png').'"', false) ?></a></li>
          <li class="item"><a class="link" href="https://github.com/matthewslouismarie"><?php $this->displayImg('alt="My GitHub profile" src="'.$this->getVersionedUri('img/githubblack', '.png').'"', false) ?></a></li>
          <li class="item"><a class="link" href="mailto:matthewslouismarie@gmail.com"><?php $this->displayImg('alt="My email address" src="'.$this->getVersionedUri('img/gmail', '.png').'"', false) ?></a></li>
      </ul>
    </div>
    <p class="line-container">I'm a student at the <span itemprop="memberOf" itemscope itemtype="http://schema.org/CollegeOrUniversity"><span itemprop="name">University of Dundee</span></span>.</p>
    <p class="line-container">This website presents the different projects I've worked on.</p>
    <p class="line-container">This website was tested for accessibility and responsiveness. It uses <a href="https://www.ampproject.org">Google AMP</a> for a better mobile experience. It also makes use of <a href="https://schema.org">schema</a> and <a href="http://ogp.me">Open Graph</a> definitions. <a href="https://github.com/matthewslouismarie/portfolio">You can view its source code on GitHub</a>.</p>
  </div>
</header>
<main class="page-main-content" itemprop="mainContentOfPage">
  <section class="project-overview" itemscope itemtype="http://schema.org/VideoGame">
    <header class="project-header -quackathon">
      <div class="content">
        <h2 class="title" itemprop="name">Flipn'Ducks</h2>
        <ul class="links-list">
          <li class="item"><a class="link" href="https://github.com/Team-Ecosse/quackathon" itemprop="http://schema.org/downloadUrl"><?php $this->displayImg('alt="GitHub" src="'.$this->getVersionedUri('img/githubwhite', '.png').'"', false) ?></a></li>
        </ul>
      </div>
    </header>
    <div class="content-container">
      <p class="line-container">We were a team of four.</p>
      <p class="line-container">Our challenge was to make a <span itemprop="applicationCategory">game</span> controlled by the player's voice in 24 hours.</p>
      <p class="line-container" itemprop="description">The loudest the player, the higher the duck jumps (to collect items or avoid obstacles). To flip, the player must make a very precise pitch.</p>
      <div class="media-container">      
        <div class="video-wrapper">
          <?php $this->displayYoutubeVideo('rdyPoRhdihA') ?>
        </div>
      </div>
      <p class="line-container">The biggest difficulties for me were to extract the pitch from the voice input and detect pitch patterns to decide if the duck should flip or not.</p>
      <p class="line-container">As it was made using Unity, it works on <span itemprop="operatingSystem">all major platforms</span>.</p>
      <div class="image-container"><?= $this->displayImg('alt="The demonstration of the game at the quackathon" src="'.$this->getVersionedUri('img/quackathonpicture', '.jpg').'"', true) ?></div>
    </div>
  </section>
  <section class="project-overview" itemscope itemtype="http://schema.org/SoftwareApplication">
    <header class="project-header -codeforgood">
      <div class="content">
        <h2 class="title" itemprop="alternateName">Code for Good (J.P. Morgan's Hackathon)</h2>
      </div>
    </header>
    <div class="content-container">
      <p class="line-container">We were six.</p>
      <p class="line-container">Our challenge was to make existing websites more accessible for blind people and people with low vision on <span itemprop="operatingSystem">all major platforms</span>.</p>
      <p class="line-container">We developped a <span itemprop="applicationCategory">Google Chrome extension</span> summarising the page's content and extracting the main sections of the page to allow the user to quickly jump to a specific part of the page.</p>
      <p class="line-container">Part of my job included making sure everyone's work would fit together and creating an algorithm to extract the main sections of any page when they do not use ARIA technologies or HTML5.</p>
      <p class="line-container">With a certain degree of precision, the algorithm detects if a section of the page is the main section or the navigation bar based on its place in the page's hierarchy and on the number of elements that do not contain any links.</p>
      <div class="image-container"><?= $this->displayImg('alt="The extension activated on the BBC website" src="'.$this->getVersionedUri('img/cyclop', '.jpg').'"', true) ?></div>      
    </div>
  </section>
  <section class="project-overview">
    <header class="project-header -yummycoffee">
      <div class="content">
        <h2 class="title">Web Developer at Yummy Coffee</h2>
      </div>
    </header>
    <div class="content-container">
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
    </div>
  </section>
  <section class="project-overview" itemscope itemtype="http://schema.org/VideoGame">
    <header class="project-header -insidertrading">
      <div class="content">
        <h2 class="title" itemprop="name">Insider Trading</h2>
        <ul class="links-list">
          <li class="item"><a class="link" href="https://github.com/matthewslouismarie/insidertrading" itemprop="http://schema.org/downloadUrl"><?php $this->displayImg('alt="GitHub" src="'.$this->getVersionedUri('img/githubwhite', '.png').'"') ?></a></li>
        </ul>
      </div>
    </header>
    <div class="content-container">
      <p class="line-container">This is the <span itemprop="applicationCategory">2D game</span> I had to make as part of the Games Programming's module assignment in second year.</p>
      <p class="line-container">I taught myself C++ instead of Unity as I thought the former is more useful to know.</p>
      <p class="line-container">Because it uses Allegro it can run on <span itemprop="operatingSystem">all major platforms</span>.</p>
      <div class="media-container">      
        <div class="video-wrapper">
          <?php $this->displayYoutubeVideo('-8LdjKoZM4s') ?>
        </div>
      </div>
    </div>
  </section>
  <section class="project-overview" itemscope itemtype="http://schema.org/VideoGame">
    <header class="project-header -shifttwo">
      <div class="content">
        <h2 class="title" itemprop="name">Shift-Two</h2>
        <ul class="links-list">
          <li class="item"><a class="link" href="http://www.moddb.com/mods/shift-two1"><?php $this->displayImg('alt="ModDB" src="'.$this->getVersionedUri('img/moddb', '.png').'"') ?></a></li>
        </ul>
      </div>
    </header>
    <div class="content-container">
      <p class="line-container">Shift-Two is a mod (a specific type of <span itemprop="applicationCategory">game</span>) that I made on my free time when I was in secondary school.</p>
      <p class="line-container">I taught myself HTML, CSS, but more importantly 3D modelling.</p>
      <p class="line-container">The technology used being old, poorly documented, and closed-source, I also gained a lot of experience in learning through trial-and-errors and not rely on community support and documentation.</p>
      <p class="line-container">The game is rated <span itemprop="aggregateRating" itemscope itemtype="http://schema.org/AggregateRating"><span itemprop="ratingValue">7</span>/<span itemprop="bestRating">10</span> out of <span itemprop="ratingCount">57</span> reviews</span> on ModDB.</p>
      <div class="media-container">
        <div class="video-wrapper">
          <?php $this->displayYoutubeVideo('Nl5L2lhoPA4') ?>
        </div>
      </div>
    </div>
  </section>
</main>
<footer class="footer">
  <div class="content-container">
    <p class="line-container">Last update: <span itemprop="lastReviewed"><?= $this->getLastModificationTime() ?></span>.</p>
  </div>
</footer>
<?php
    }

    public function displayHeadContent(): void
    {
?>
<meta property="fb:app_id" content="2013357305611860">
<meta property="og:title" content="Louis-Marie Matthews's Portfolio">
<meta property="og:determiner" content="">
<meta property="og:locale" content="en_GB">
<meta property="og:type" content="profile">
<meta property="og:description" content="My portfolio. I am a computing student at the University of Dundee.">
<meta property="og:image" content="<?= $this->getVersionedUri('louismarie', '.jpg') ?>">
<meta property="og:image:alt" content="Louis-Marie Matthews">
<meta property="og:image:width" content="1200">
<meta property="og:image:height" content="627">
<meta property="og:image:type" content="image/jpeg">
<meta property="og:url" content="https://<?= htmlspecialchars($_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']) ?>">
<link rel="icon" href="<?= $this->getVersionedUri('img/favicon', '.ico') ?>">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto+Condensed">
<?php
    }

    public function displayHeadAttrs(): void
    {
        echo 'class="page-container" lang="en"';
    }

    public function displayImg(string $attrs, bool $allWidth = false): void
    {
        if ($allWidth) {
            echo '<img class="logo" '.$attrs.' width="100%" height="auto">';
        } else {
            echo '<img class="logo" '.$attrs.'>';
        }
    }

    public function displayYoutubeVideo(string $id): void
    {
        echo '<iframe class="iframe" width="560" height="315" src="https://www.youtube.com/embed/'.$id.'?rel=0" allowfullscreen></iframe>';
    }

    /**
     * @link https://stackoverflow.com/a/20289096/7089212
     */
    public function getLastModificationTime(): string
    {
        $tz = 'Europe/London';
        $dt = new \DateTime("now", new \DateTimeZone($tz)); //first argument "must" be a string
        $dt->setTimestamp(filemtime(__FILE__)); //adjust the object to correct timestamp
        return $dt->format(\DateTime::ATOM);
    }

    public function getVersionedUri(string $first_part, string $extension): string
    {
        $uri_builder = new UriBuilder('uri_builder_config.json');
        return $uri_builder->getUri($first_part.'.'.filemtime(PORTFOLIO_ROOT.'/'.$first_part.$extension).$extension);
    }
}