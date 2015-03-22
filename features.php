<?php
<<<<<<< HEAD
=======
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
echo $_SESSION['test'];
>>>>>>> 6354fc33707c60f9c9ddbf002d7383c6248736e1
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
  <title>Droute</title>
  <link href='http://fonts.googleapis.com/css?family=Roboto+Slab' rel='stylesheet' type='text/css'>
  <link href="css/main.css" type="text/css" rel="stylesheet" />
  <!-- CSS  -->
  <link href="bower_components/materialize/dist/css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="bower_components/materialize/dist/css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body>
 <nav class="dark-primary-bg" role="navigation">
    <div class="container">
      <div class="nav-wrapper"><a id="logo-container" href="/droute" class="brand-logo hide-on-med-and-down">Droute</a>
        <ul class="right hide-on-small-only">
         <li><a href="index">Home</a></li> 
         <li><a href="#" class="active">Features</a></li>
         <li><a href="explore">Explore</a></li>
         <li><a href="contact">Contact</a></li>
         <li class="logged"><a class="log-text" href="login.php">Login</a></li>
        </ul>

        <ul id="nav-mobile" class="side-nav">
          <li class="logged"><a class="log-text" href="login.php">Login</a></li>
          <li><a href="index.php">Home</a></li>
          <li><a href="features.php">Feature</a></li>
          <li><a href="explore.php">Explore</a></li>
          <li><a href="contact.php">Contact</a></li>
        </ul>
        <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="mdi-navigation-menu"></i></a>
      </div>
    </div>
  </nav>
  <div class="container features-cont">
    <div class="row">
        <div class="col s12 m9 l10">
          <h1 class="header">Features</h1>
          <h4 class="header section scrollspy" id="kiip-rewards">Kiip Rewards</h4>
          <div class="card-panel grey lighten-5 z-depth-1">
            <div class="row valign-wrapper no-margin-btm">
              <div class="col s2 valign">
                <img src="img/kiip.png" alt="" class="circle responsive-img"> <!-- notice the "circle" class -->
              </div>
              <div class="col s10">
                <span class="black-text">
                  See where the nearest promoted route is, take it, collect a physical reward. It's that easy.
                </span>
                <br/><a href="#">Read more about Kiip integration</a>
              </div>
            </div>
          </div>
          <h4 class="header section scrollspy" id="supported-drones">Supported Drones</h4>
          <div class="card-panel grey lighten-5 z-depth-1">
            <div class="row valign-wrapper no-margin-btm">
              <div class="col s2 valign">
                <img src="img/drone.jpg" alt="" class="circle responsive-img"> <!-- notice the "circle" class -->
              </div>
              <div class="col s10">
                <span class="black-text">
                  We support the most advanced drones as of now, but we're working to expand the list of the supported drones.
                </span>
                <br/><a href="#">Read more about specific Drone support</a>
              </div>
            </div>
          </div>

          <h4 class="header section scrollspy" id="route-media-timeline">Route media timeline</h4>
          <div class="card-panel grey lighten-5 z-depth-1">
            <div class="row valign-wrapper no-margin-btm">
              <div class="col s2 valign">
                <img src="img/clock.png" alt="" class="responsive-img"> <!-- notice the "circle" class -->
              </div>
              <div class="col s10">
                <span class="black-text">
                  Introducing <strong>Route Media Timeline</strong> - an advanced tool that enables visualizing the drone route and links all media taken during the flight to route waypoints.
                </span>
                <br/><a href="#">How do we build a Media Timeline?</a>
              </div>
            </div>
          </div>

          <h4 class="header section scrollspy" id="route-cloud-saving">Route cloud saving</h4>
          <div class="card-panel grey lighten-5 z-depth-1">
            <div class="row valign-wrapper no-margin-btm">
              <div class="col s2 valign">
                <img src="img/cloud.png" alt="" class="responsive-img"> <!-- notice the "circle" class -->
              </div>
              <div class="col s10">
                <span class="black-text">
                  All routes are stored in the cloud, automatically. Forget about the save button.
                </span>
                <br/><a href="#">How and where do you store a route?</a>
              </div>
            </div>
          </div>

          <h4 class="header section scrollspy" id="searching-routes">Searching routes by location</h4>
          <div class="card-panel grey lighten-5 z-depth-1">
            <div class="row valign-wrapper no-margin-btm">
              <div class="col s2 valign">
                <img src="img/compass.png" alt="" class="responsive-img"> <!-- notice the "circle" class -->
              </div>
              <div class="col s10">
                <span class="black-text">
                  Find the nearest route, or if you're on the go, use the built-in route finder to see what's happening around you.
                </span>
                <br/><a href="#">Read more about our geo-location service</a>
              </div>
            </div>
          </div>

          <h4 class="header section scrollspy" id="media-library">Media Library</h4>
          <div class="card-panel grey lighten-5 z-depth-1">
            <div class="row valign-wrapper no-margin-btm">
              <div class="col s2 valign">
                <img src="img/library.jpg" alt="" class="circle responsive-img"> <!-- notice the "circle" class -->
              </div>
              <div class="col s10">
                <span class="black-text">
                  All media is stored in the cloud and is accessible on any device.
                </span>
                <br/><a href="#">Read more about the storage option</a>
              </div>
            </div>
          </div>

          <h4 class="header section scrollspy" id="private-repository">Private repository for routes</h4>
          <div class="card-panel grey lighten-5 z-depth-1">
            <div class="row valign-wrapper no-margin-btm">
              <div class="col s2 valign">
                <img src="img/lock.png" alt="" class="responsive-img"> <!-- notice the "circle" class -->
              </div>
              <div class="col s10">
                <span class="black-text">
                  Select who you share the route with, when you save it.
                </span>
                <br/><a href="#">Read more about private routes</a>
              </div>
            </div>
          </div>

          <h4 class="header section scrollspy" id="free-account">Free personal account</h4>
          <div class="card-panel grey lighten-5 z-depth-1">
            <div class="row valign-wrapper no-margin-btm">
              <div class="col s2 valign">
                <img src="img/account.png" alt="" class="circle responsive-img"> <!-- notice the "circle" class -->
              </div>
              <div class="col s10">
                <span class="black-text">
                  You can store unlimited number of routes in the cloud, for free.
                </span>
                <br/><a href="#">Read more about account options</a>
              </div>
            </div>
          </div>

          <h4 class="header section scrollspy" id="follow">Follow local profiles and communities</h4>
          <div class="card-panel grey lighten-5 z-depth-1">
            <div class="row valign-wrapper no-margin-btm">
              <div class="col s2 valign">
                <img src="img/people-icon.png" alt="" class="circle responsive-img"> <!-- notice the "circle" class -->
              </div>
              <div class="col s10">
                <span class="black-text">
          Buddy up with other drone enthusiasts in your region, or anywhere, your call
                </span>
                <br/><a href="#">Read more</a>
              </div>
            </div>
          </div>
          <div class="card primary-bg">
            <div class="card-content white-text">
              <span class="card-title"><strong>Sign up for an account</strong></span>
              <p>Create an account now, and get the above features for free. We promise.</p>
            </div>
            <div class="card-action">
              <a href="#" class="white-text">Create an account</a>
            </div>
          </div>
        </div>

        <div class="col hide-on-small-only m3 l2">
          <div class="toc-wrapper white">
            <ul class="section table-of-contents">
              <li><a href="#kiip-rewards">Kiip rewards</a></li>
              <li><a href="#supported-drones">Supported drones</a></li>
              <li><a href="#route-media-timeline">Route media timeline</a></li>
              <li><a href="#route-cloud-saving">Route cloud saving</a></li>
              <li><a href="#searching-routes">Searching routes by location</a></li>
              <li><a href="#media-library">Media library for uploading</a></li>
              <li><a href="#private-repository">Private repository for routes</a></li>
              <li><a href="#free-account">Free personal account</a></li>
              <li><a href="#follow">Follow local profiles and communities</a></li>

            </ul>
          </div>
        </div>
    </div>
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
  <script type="text/javascript">
    $(document).ready(function(){
      $('.scrollspy').scrollSpy();
      // Floating-Fixed table of contents
      if ($('nav').length) {
        $('.toc-wrapper').pushpin({ top: $('nav').height() });
      }
      else {
        $('.toc-wrapper').pushpin({ top: 0 });
      }
    });
        
  </script>
</body>

</html>
