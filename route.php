<?php
//print_r($_GET);

require_once('model/index.php');
$dr = new droute();

$images = $dr->get_route_media_img($_GET['route']);
$info = $dr->get_route_media($_GET['route']);
//print_r($info);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
  <title><?php echo $info['route_name']; ?> - Droute</title>
  <link href='http://fonts.googleapis.com/css?family=Roboto+Slab' rel='stylesheet' type='text/css'>
  <!-- CSS  -->
  <link href="css/main.css" type="text/css" rel="stylesheet" />
  <link href="bower_components/materialize/dist/css/materialize.min.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="bower_components/materialize/dist/css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body>
 <nav class="dark-primary-bg" role="navigation">
    <div class="container">
      <div class="nav-wrapper"><a id="logo-container" href="/droute" class="brand-logo white-text">Droute</a>
        <ul class="right white-text">
         <li><a href="/droute">Home</a></li> 
         <li><a href="features">Features</a></li>
         <li><a href="explore">Explore</a></li>
         <li><a href="contact">Contact</a></li>
        </ul>

        <ul id="nav-mobile" class="side-nav">
          <li><a href="#">Navbar Link</a></li>
        </ul>
        <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="mdi-navigation-menu"></i></a>
      </div>
    </div>
  </nav>
  <!--route name, user avatar and name -->
<div class="primary-bg row no-margin z-depth-1">
<div class="container">
    <div class="row no-margin">
      <div class="col l6 m12 s12 route-name left-align white-text">
        <h4><?php echo $info['route_name']; ?></h4>
      </div>
      <div class="col l3 m6 s6 route-created-by right-align white-text valign-wrapper">
        <h6 class="valign">
         Route created by:
        </h6>
       
      </div>
      <div class="col l3 m6 s6 route-created-by left-align white-text">
        <p class="route-creator valign-wrapper"> 
          <img src="http://materializecss.com/images/yuna.jpg" alt="" class="valign circle responsive-img"> 
          <span class="valign">Kevin Pilsner</span>
        </p>
      </div>
  </div>
</div>
</div>
  

  <div class="row route-cont no-margin">
    <div class="col l2 m3 s12">
      <div class="row">
        <p><strong>Route information <i class="primary-bg-text tiny mdi-action-help tooltipped" data-position="bottom" data-delay="50" data-tooltip="This is general route information"></i></strong></p>
          <table class="bordered hoverable">
            <tbody>
              <tr>
                <td>Name</td>
                <td><?php echo $info['route_name']; ?></td>
              </tr>
              <tr>
                <td>Category</td>
                <td><?php echo $info['category_name']; ?></td>
              </tr>
              <tr>
                <td>Date</td>
                <td><?php echo $info['date']; ?></td>
              </tr>
              <tr>
                <td>Camera</td>
                <td><?php echo $info['camera']; ?></td>
              </tr>
            </tbody>
        </table>
        <p><strong>Description</strong></p>
        <p><?php echo $info['text_info'] ?></p>
        <a class="waves-effect waves-light btn route-btn dark-primary-bg"><i class="mdi-file-cloud left"></i>Save this route</a>
      </div>
          
      </div>
    <div class="col l6 m9 s12">
      <p><strong>Flight map <i class="primary-bg-text tiny mdi-action-help tooltipped" data-position="bottom" data-delay="50" data-tooltip="Generated fligh path for a route"></i></strong></p>
      <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d20821.349314510637!2d-123.11645662524415!3d49.28267527248596!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sca!4v1426276883227" width="100%" height="50vh" frameborder="0" style="border:0"></iframe>
    </div>
    <div class="col l4 m12 s12">
        <p><strong>Route media <i class="primary-bg-text tiny mdi-action-help tooltipped" data-position="bottom" data-delay="50" data-tooltip="Media taken during the flight"></i></strong></p>
        <?php if(empty($images)){
            echo "<div class='card-panel warning warning-bg'>
          <span class='primary-text'>No media has been found for this route :(
          </span>
        </div>";
          } ?>
       <div class="js-masonry"  data-masonry-options='{ "isFitWidth": true }'>
        <?php 

         
          foreach ($images as $val) {
            # code...
            echo "<div class='media-item w3 h2' style='background:url(\"".$val."\")no-repeat center center / cover'></div>";
          }


        ?>
        <!--<div class="media-item"></div>
        <div class="media-item w2 h2"></div>
        <div class="media-item h2"></div>
        <div class="media-item h2"></div>
        <div class="media-item w3"></div>
        <div class="media-item"></div>
        <div class="media-item"></div>
        <div class="media-item h2"></div>
        <div class="media-item w2 h3"></div>
        <div class="media-item"></div>
        <div class="media-item h2"></div>
        <div class="media-item"></div>
        <div class="media-item w2"></div>-->
      </div>
      
    </div>
              
  </div>
  <!--<h3>Route timeline</h3>-->





    <!--  Scripts-->
  <script src="js/masonry.pkgd.min.js"></script>
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="bower_components/materialize/dist/js/init.js"></script>
  <script src="bower_components/materialize/dist/js/materialize.min.js"></script>

</body>

</html>