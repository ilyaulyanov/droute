<?php
//print_r($_GET);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
  <title><?php echo $_GET['name']; ?> - Droute</title>
  <link href='http://fonts.googleapis.com/css?family=Roboto+Slab' rel='stylesheet' type='text/css'>
  <!-- CSS  -->
  <link href="css/main.css" type="text/css" rel="stylesheet" />
  <link href="bower_components/materialize/dist/css/materialize.min.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="bower_components/materialize/dist/css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body>
 <nav class="dark-primary-bg" role="navigation">
    <div class="container">
      <div class="nav-wrapper"><a id="logo-container" href="#" class="brand-logo white-text">Droute</a>
        <ul class="right white-text">
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
  <!--route name, user avatar and name -->
<div class="primary-bg row no-margin">
<div class="container">
    <div class="row">
      <div class="col l6 route-name left-align white-text">
        <h4><?php echo $_GET['name']; ?></h4>
      </div>
      <div class="col l6 route-created-by right-align valign-wrapper white-text">
        <p class="valign">Route created by </p>
        <p> Kevin </p>
      </div>
  </div>
</div>
</div>
  

  <div class="row route-cont no-margin">
    <div class="col l2 ">
      <div class="row">
        <p><strong>Route information</strong></p>
          <table class="striped hoverable">
            <tbody>
              <tr>
                <td>Name</td>
                <td><?php echo $_GET['name']; ?></td>
              </tr>
              <tr>
                <td>Alan</td>
                <td>Jellybean</td>
              </tr>
              <tr>
                <td>Jonathan</td>
                <td>Lollipop</td>
              </tr>
            </tbody>
        </table>
        <a class="waves-effect waves-light btn route-btn"><i class="mdi-file-cloud left"></i>Save to my cloud</a>
      </div>
          
      </div>
    <div class="col l6">
      <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d20821.349314510637!2d-123.11645662524415!3d49.28267527248596!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sca!4v1426276883227" width="100%" height="100vh" frameborder="0" style="border:0"></iframe>
    </div>
    <div class="col l4">
        <h5>Route Media</h5>
       <div class="js-masonry"  data-masonry-options='{ "isFitWidth": true }'>
        <div class="media-item"></div>
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
        <div class="media-item w2 h2"></div>
      </div>
      
    </div>
              
  </div>
  




    <!--  Scripts-->
  <script src="js/masonry.pkgd.min.js"></script>
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="bower_components/materialize/dist/js/init.js"></script>
  <script src="bower_components/materialize/dist/js/materialize.min.js"></script>

</body>

</html>