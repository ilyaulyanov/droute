<?php
session_start();
require_once('model/index.php');
?>
<?php
if(isset($_SESSION['name'])){
  ?>
  <script>
    $(document).ready(function(){
      $(".log-text").html('<?php echo $_SESSION["name"]." Logout" ?>');
      $(".log-text").attr("href", "<?php session_destroy(); ?>");
    })
  </script>
  <?php

}else{
  ?>
<?php

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
  <link href="bower_components/materialize/dist/css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body>
 <nav class="dark-primary-bg" role="navigation">
    <div class="container">
      <div class="nav-wrapper"><a id="logo-container" href="/droute" class="brand-logo hide-on-med-and-down">Droute</a>
        <ul class="right hide-on-small-only"> 
         <li><a href="index.php">Home</a></li> 
         <li><a href="features.php">Features</a></li>
         <li><a href="explore.php">Explore</a></li>
         <li><a href="#">Contact</a></li>
          <li class="logged"><a class="log-text" href="login.php">Login</a></li>
          </ul>
        
        <ul id="nav-mobile" class="side-nav">
          <li class="logged"><a class="log-text" href="login.php">Login</a></li>
          <li><a href="index.php">Home</a></li>
          <li><a href="features.php">Feature</a></li>
          <li><a href="explore.php">Explore</a></li>
          <li><a href="contact.php">Contact</a></li>
        </ul>
        <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="tiny mdi-navigation-menu"></i></a>

      </div>
    </div>
  </nav> 


  <div class="header-about hide-on-small-only">
  </div>

  <!-- content -->
  <div class="container">
    <div class="row">
      <div class="col s12  ">
        <ul class="tabs">
          <li class="tab col s6"><a class="active" href="#about-us">About Droute</a></li>
          <li class="tab col s6"><a href="#jobs">Jobs</a></li>
        </ul>
      </div>
      <div id="about-us" class="col s12">
        <div class='row valign-wrapper'>
          <h4 class='center-align about-lead'>
            Droute is the best place to share Drone taken videos and photos with friends, co-workers, classmates, and complete strangers. We are amazed how the commuinty has grown, lets do great things together.
          </h4>
        </div>
        <div class="divider"></div>
        <div class='row valign-wrapper left-align pad'>
          <div class='col s6'>
           <h5>With the collaborative features of Droute. It has never been easier for individuals and teams to survey an area and explore. Make an account with us and start collaborating</h5>
          </div>
          <div class='col s6'>
          <h5>Founded by Ilya Ulyanov, Jeff FitzGerald, Gordon Lee to grow the drone community. The drone community is quickly becoming one of the fastest growing communities</h5>
          </div>
        </div>
      </div>
      <div id="jobs" class="col s12">
        <div class='row valign-wrapper'>
          <h4 class='center-align about-lead'>Come help us make collaboration even better. At Droute we build the tools that make collaborating and flying easier. We've built a company we truly love working for, and we think you will too. Here's why.</h4>
        </div>
        <div class="divider"></div>
        <div class='row valign-wrapper left-align'>
          <div class='col s8'>
           <div row>
             <div class='col s12'>
              <h3>A Remote and Flexible Workplace</h3>
              <h5>We encourage employees to build amazing things with a high level of autonomy and self-direction. Work/life balance is important to us, which is why we offer flexible work schedules and unlimited PTO. We believe that if a job allows for it, people should work wherever they're happiest.</h5>
             </div>
           </div>
           <div row>
             <div class='col s12'>
              <h3>Our office</h3>
              <h5>Our office is base in downtown Vancouver. We have unique spaces like a Bat Cave and a think tank to rejuvenate your creativity. We also have a bike room where you can store your bike.</h5>
             </div>
           </div>
          </div>
          <div class='col s4'>
            <div class="card-panel dark-primary-bg">
              <span class="white-text">
                <h4>Open Positions</h4>
                Currently we do not have any openings.
              </span>
            </div>
          </div>
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
</body>

</html>
