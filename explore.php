<?php
require_once('model/index.php');

$dr = new droute();
$cat1="4";
$cat2="5";
$cat3="6";
$scenic = $dr->get_route_by_cat($cat1);
$historical = $dr->get_route_by_cat($cat2);
$trending = $dr->get_route_by_cat($cat3);
$picks = $dr->get_all_staff_picks();
//print_r($picks);

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
  <title>Droute</title>

  <!-- CSS  -->
  <link href='http://fonts.googleapis.com/css?family=Roboto+Slab' rel='stylesheet' type='text/css'>
  <link href="css/main.css" type="text/css" rel="stylesheet" />
  <link href="bower_components/materialize/dist/css/materialize.min.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="bower_components/materialize/dist/css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body>
 <nav class="dark-primary-bg" role="navigation">
    <div class="container">
      <div class="nav-wrapper "><a id="logo-container" href="#" class="brand-logo hide-on-small-only">Droute</a>
        <ul class="right hide-on-small-only">
         <li><a href="index.php">Home</a></li> 
         <li><a href="features.php">Features</a></li>
         <li><a href="#">Explore</a></li>
         <li><a href="contact.php">Contact</a></li>
        </ul>

        <ul id="nav-mobile" class="side-nav">
          <li><a href="#">Navbar Link</a></li>
        </ul>
        <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="mdi-navigation-menu"></i></a>
      </div>
    </div>
  </nav>


  <div class="row intoExplore hide-on-small-only">
    <div class="col s12 m12">
      <div class="container">
          <div class="row">
            <div class="col m12 s12 center white-text ">
              <h1>Explore Routes</h1>
            </div>
          </div>
      </div>
    </div>
  </div>

  <div class="row">
      <h4 class="header center primary-text">Explore Our Picks</h4>
        <?php
          foreach (array_slice($picks, 0, 4) as $card) {
          echo "<div class=\"col s12 m3\"><div class=\"card small\"><div class=\"card-image\">";
          echo "<img src=\"".$card['thumb']."\">";
          echo "<span class=\"card-title\">".$card['route_name']."</span>";
          echo "</div> <div class=\"card-content primary-bg\">";
          echo "<p>Route category: ".$card['category_name']."</p><p>Added on: ".$card['add_date']."</p>";
          echo "</div><div class=\"card-action dark-primary-bg\">";
          echo "<a class=\"white-text\" href=\"route.php?route=".$card['id']."&name=".$card['route_name']."\">Explore the route</a><i class=\"mdi-content-send\"></i>";
          echo "</div></div></div>";
          }
        ?>
  </div>  
    
            <div class="row">
              <div class="col m4 s12 ">
              <h4 class="header center primary-text">Scenic</h4>
                <?php
                  foreach ($scenic as $card) {
                    echo "<div class=\"card small\"><div class=\"card-image\">";
                    echo "<img src=\"".$card['thumb']."\">";
                    echo "<span class=\"card-title\">".$card['route_name']."</span>";
                    echo "</div> <div class=\"card-content primary-bg\">";
                    echo "<p>Route category: ".$card['category_name']."</p><p>Added on: ".$card['created_date']."</p>";
                    echo "</div><div class=\"card-action dark-primary-bg\">";
                    echo "<a class=\"white-text\" href=\"route.php?route=".$card['id']."&name=".$card['route_name']."\">Explore the route</a><i class=\"mdi-content-send\"></i>";
                    echo "</div></div>";
                  }
                ?>
              </div>
              <div class="col m4 s12 ">
              <h4 class="header center primary-text">Historical</h4>
                <?php
                  foreach ($historical as $card) {
                    echo "<div class=\"card small\"><div class=\"card-image\">";
                    echo "<img src=\"".$card['thumb']."\">";
                    echo "<span class=\"card-title\">".$card['route_name']."</span>";
                    echo "</div> <div class=\"card-content primary-bg\">";
                    echo "<p>Route category: ".$card['category_name']."</p><p>Added on: ".$card['created_date']."</p>";
                    echo "</div><div class=\"card-action dark-primary-bg\">";
                    echo "<a class=\"white-text\" href=\"route.php?route=".$card['id']."&name=".$card['route_name']."\">Explore the route</a><i class=\"mdi-content-send\"></i>";
                    echo "</div></div>";
                  }
                ?>
              </div>
              <div class="col m4 s12 ">
              <h4 class="header center primary-text">Trending</h4>
                <?php
                  foreach ($trending as $card) {
                    echo "<div class=\"card small\"><div class=\"card-image\">";
                    echo "<img src=\"".$card['thumb']."\">";
                    echo "<span class=\"card-title\">".$card['route_name']."</span>";
                    echo "</div> <div class=\"card-content primary-bg\">";
                    echo "<p>Route category: ".$card['category_name']."</p><p>Added on: ".$card['created_date']."</p>";
                    echo "</div><div class=\"card-action dark-primary-bg\">";
                    echo "<a class=\"white-text\" href=\"route.php?route=".$card['id']."&name=".$card['route_name']."\">Explore the route</a><i class=\"mdi-content-send\"></i>";
                    echo "</div></div>";
                  }
                ?>
              </div>
            </div>






    <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="bower_components/materialize/dist/js/init.js"></script>
  <script src="bower_components/materialize/dist/js/materialize.min.js"></script>
</body>

</html>
