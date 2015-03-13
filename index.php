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
  <link href="bower_components/materialize/dist/css/materialize.min.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="bower_components/materialize/dist/css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body>
  <nav class="white" role="navigation">
    <div class="container">
      <div class="nav-wrapper"><a id="logo-container" href="http://google.ca" class="brand-logo">Droute</a>
        <ul class="right">
         <li><a href="#">Home</a></li> 
         <li><a href="features.php">Features</a></li>
         <li><a href="explore.php">Explore</a></li>
         <li><a href="contact.php">Contact</a></li>
        </ul>

        <ul id="nav-mobile" class="side-nav">
          <li><a href="#">Navbar Link</a></li>
        </ul>
        <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="mdi-navigation-menu"></i></a>
      </div>
    </div>
  </nav>

  <div id="index-banner" class="parallax-container">
    <div class="section no-pad-bot">
      <div class="container">
        <br><br>
        <h1 class="header center teal-text text-lighten-2">Company Objective</h1>
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
            <h2 class="center brown-text"><i class="mdi-image-flash-on"></i></h2>
            <h5 class="center">Geotagging & Route Storage</h5>

            <p class="light">Securely store route waypoints and find routes relative to your location that have been uploaded by the Droute community. Easily access your previously flown routes for repeat projects and aerial surveying.</p>
          </div>
        </div>

        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center brown-text"><i class="mdi-social-group"></i></h2>
            <h5 class="center">Private & Public Profiles</h5>

            <p class="light">Public profiles are completely free to use and always will be. Upgrade to an enterpise account to securely store routes and content privately; along with unlimited storage in the cloud.</p>
          </div>
        </div>

        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center brown-text"><i class="mdi-action-settings"></i></h2>
            <h5 class="center">Route Media Timeline</h5>

            <p class="light">The route media timeline allows users to timestamp there uploads and share drone generated content such as a photo gallery and video with their followers.</p>
          </div>
        </div>
      </div>

    </div>
  </div>


  <div class="parallax-container valign-wrapper">
    <div class="section no-pad-bot">
      <div class="container">
        <div class="row center">
          <h5 class="header col s12 light">A modern responsive front-end framework based on Material Design</h5>
        </div>
      </div>
    </div>
    <div class="parallax"><img src="img/airline.jpg" alt="Unsplashed background img 2"></div>
  </div>

  <div class="container">
    <div class="section">

      <div class="row">
        <div class="col s12 center">
          <h3><i class="mdi-content-send brown-text"></i></h3>
          <h4>Compatable Drones</h4>
          <p class="left-align light">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam scelerisque id nunc nec volutpat. Etiam pellentesque tristique arcu, non consequat magna fermentum ac. Cras ut ultricies eros. Maecenas eros justo, ullamcorper a sapien id, viverra ultrices eros. Morbi sem neque, posuere et pretium eget, bibendum sollicitudin lacus. Aliquam eleifend sollicitudin diam, eu mattis nisl maximus sed. Nulla imperdiet semper molestie. Morbi massa odio, condimentum sed ipsum ac, gravida ultrices erat. Nullam eget dignissim mauris, non tristique erat. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;</p>
          <h4 class="header center text-lighten-2">Staff Picks</h4>
            <div class="row">
                <?php
                  foreach ($picks as $card) {
                    echo "<div class=\"col s12 m6\"> <div class=\"card small\"><div class=\"card-image\">";
                    echo "<img src=\"".$card['thumb']."\">";
                    echo "<span class=\"card-title\">".$card['route_name']."</span>";
                    echo "</div> <div class=\"card-content\">";
                    echo "<p>Route category: ".$card['category_name']."</p><p>Added on: ".$card['add_date']."</p>";
                    echo "</div><div class=\"card-action\">";
                    echo "<a href=\"route.php?route=".$card['id']."&name=".$card['route_name']."\">Explore the route</a>";
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

  <footer class="page-footer teal">
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
