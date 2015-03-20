<?php
require_once('model/index.php');

$dr = new droute();

$picks = $dr->get_all_staff_picks();

//print_r($picks);


//get location of a user and store it in a session
session_start();
if(!isset($_SESSION['country'])){
  $ip = $_SERVER['REMOTE_ADDR'];
  $details = json_decode(file_get_contents("http://ipinfo.io/{$ip}/json"));
  $_SESSION['country'] = $details->country;
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
  <title>Droute</title>

  <!-- CSS  -->
  <link href="css/main.css" type="text/css" rel="stylesheet" />
  <link href="bower_components/materialize/dist/css/materialize.min.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/main.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="bower_components/materialize/dist/css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body>
  <nav class="dark-primary-bg" role="navigation">
    <div class="container">
<<<<<<< HEAD
      <div class="nav-wrapper primary-text"><a id="logo-container" href="http://google.ca" class="brand-logo hide-on-med-and-down">Droute</a>
        <ul class="right hide-on-small-only">
         <li><a href="#">Home</a></li> 
=======
      <div class="nav-wrapper primary-text"><a id="logo-container" href="/droute" class="brand-logo">Droute</a>
        <ul class="right">
         <li><a href="/droute">Home</a></li> 
>>>>>>> origin/master
         <li><a href="features">Features</a></li>
         <li><a href="explore">Explore</a></li>
         <li><a href="contact">Contact</a></li>
        </ul>

        <ul id="nav-mobile" class="side-nav">
          <li><a href="index.php">Home</a></li>
          <li><a href="features.php">Feature</a></li>
          <li><a href="explore.php">Explore</a></li>
          <li><a href="contact.php">Contact</a></li>
        </ul>
        <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="mdi-navigation-menu"></i></a>
      </div>
    </div>
  </nav>

  <div id="index-banner" class="parallax-container">
    <div class="section no-pad-bot">
      <div class="container">
        <br><br>
        <h1 class="header center primary-bg-text">Company Objective</h1>


        <div class="row center">
          <h5 class="header col s12 light">Drone route and media storage in the cloud</h5>
        </div>
        <div class="row center">
          <p class="row center"></p>
        </div>
        <br><br>

      </div>
    </div>
    <div class="parallax"><img src="img/dji_phantom.jpg" alt="Unsplashed background img 2"></div>
  </div>


  <div class="container"> 
    <div class="section">

      <!--   Icon Section   -->
      <div class="row">
        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center accent"><i class="mdi-image-flash-on"></i></h2>
            <h5 class="center, primary-text">Geotagging & Route Storage</h5>

            <p class="primary-text">Securely store route waypoints and find routes relative to your location that have been uploaded by the Droute community. Easily access your previously flown routes for repeat projects and aerial surveying.</p>
          </div>
        </div>

        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center accent"><i class="mdi-social-group"></i></h2>
            <h5 class="center primary-text">Private & Public Profiles</h5>

            <p class="primary-text">Public profiles are completely free to use and always will be. Upgrade to an enterpise account to securely store routes and content privately; along with unlimited storage in the cloud.</p>
          </div>
        </div>

        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center accent"><i class="mdi-action-settings"></i></h2>
            <h5 class="center primary-text">Route Media Timeline</h5>

            <p class="primary-text">The route media timeline allows users to timestamp there uploads and share drone generated content such as a photo gallery and video with their followers.</p>
          </div>
        </div>
      </div>

    </div>
  </div>


  <div class="parallax-container valign-wrapper">
    <div class="section no-pad-bot">
      <div class="container">
        <div class="row center">
          <h5 class="header col s12">Share and save routes on your Droute profile.</h5>
        </div>
      </div>
    </div>
    <div class="parallax"><img src="img/airline.jpg" alt="Unsplashed background img 2"></div>
  </div>

  <div class="container">
    <div class="section">
      <div class="row">
        <div class="col s12 center">
          <h3><i class="mdi-content-send accent"></i></h3>
          <h4 class="primary-text" >Compatable Drones</h4>
          <div class="row">
            <div class="col l6 m6 s12">
              <div class="card">
                <div class="card-image">
                  <img src="img/parrot3.jpg">
                  <span class="card-title">Parrot Drone</span>
                </div>
                <div class="card-content primary-bg">
                  <p>I am a very simple card. I am good at containing small bits of information.
                            I am convenient because I require little markup to use effectively.</p>
                </div>
                <div class="card-action dark-primary-bg">
                  <a class=" white-text" href="#">Purchase</a><i class="small mdi-action-add-shopping-cart"></i>
                </div>
              </div>
            </div>
            <div class="col l6 m6 s12">
              <div class="card">
                <div class="card-image">
                  <img src="img/djiPhantom2.jpg">
                  <span class="card-title">DJI Phantom 2</span>
                </div>
                <div class="card-content primary-bg">
                  <p>I am a very simple card. I am good at containing small bits of information.
                            I am convenient because I require little markup to use effectively.</p>
                </div>
                <div class="card-action dark-primary-bg">
                  <a class=" white-text" href="#">Purchase</a><i class="small mdi-action-add-shopping-cart"></i>
                </div>              
              </div>
            </div>
          </div>

          <h4 class="header center primary-text">Staff Picks</h4>
            <div class="row">
                <?php
                  foreach ($picks as $card) {
                    echo "<div class=\"col s12 m6\"> <div class=\"card small\"><div class=\"card-image\">";
                    echo "<img src=\"".$card['thumb']."\">";
                    echo "<span class=\"card-title\">".$card['route_name']."</span>";
                    echo "</div> <div class=\"card-content primary-bg\">";
                    echo "<p>Route category: ".$card['category_name']."</p><p>Added on: ".$card['add_date']."</p>";
                    echo "</div><div class=\"card-action dark-primary-bg\">";
                    echo "<a class=\"white-text\" href=\"route?route=".$card['id']."&name=".$card['route_name']."\">Explore the route</a><i class=\"mdi-content-send\"></i>";
                    echo "</div></div></div>";
                  }
                ?>
            </div>
        </div>
      </div>

    </div>
  </div>


  <div class="parallax-container valign-wrapper">
    <div class="section no-pad-bot">
      <div class="container">
        <div class="row center">
          <h5 class="header col s12 light">Secure your drone routes and content in the cloud.</h5>
        </div>
      </div>
    </div>
    <div class="parallax"><img src="img/parrot.jpg" alt="Unsplashed background img 3"></div>
  </div>

  <footer class="page-footer dark-primary-bg">
    <div class="container">
      <div class="row">
        <div class="col l6 s12">
          <h5 class="white-text">Company Bio</h5>
          <p class="grey-text text-lighten-4">We are a team of college students working on this project like it's our full time job. Any amount would help support and continue development on this project and is greatly appreciated.</p>


        </div>
        <div class="col l3 s12">
          <h5 class="white-text">Careers</h5>
          <ul>
            <li><a class="white-text" href="#!">iOS Developer</a></li>
            <li><a class="white-text" href="#!">Android Developer</a></li>
            <li><a class="white-text" href="#!">Marketing Intern</a></li>
          </ul>
        </div>
        <div class="col l3 s12">
          <h5 class="white-text">Connect</h5>
          <ul>
            <li><a class="white-text" href="#!">Gordon Lee</a></li>
            <li><a class="white-text" href="#!">Ilya Ulyanov</a></li>
            <li><a class="white-text" href="#!">Jeff FitzGerald</a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="footer-copyright">
      <div class="container">
      Made by <a class="brown-text text-lighten-3" href="http://materializecss.com">Keelo Digital</a>
      </div>
    </div>
  </footer>


  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="bower_components/materialize/dist/js/init.js"></script>
  <script src="bower_components/materialize/dist/js/materialize.min.js"></script>

  </body>
</html>
