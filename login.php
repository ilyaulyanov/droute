<?php
session_start();
require_once('model/index.php');
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
         <li><a href="contact.php">Contact</a></li>
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
  <div class='pad3'?
  <!-- content -->
  <div class='container'>
    <div class="row">
      <div class='col s8'>
        <div class="row">
          <form>
            <div class="row">
              <div class="input-field col s12">
                <input id="email" type="email" class="validate">
                <label for="email">Email</label>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s12">
                <input id="password" type="password" class="validate">
                <label for="password">Password</label>
              </div>
            </div>
            <button id='log'class="btn waves-effect waves-light dark-primary-bg" type="submit" name="action">Submit
              <i class="mdi-content-send right"></i>
            </button>
          </form>
        </div>
      </div>
      <div class="pad2">
        <div class="col s4">
          <div class="card-panel dark-primary-bg  ">
            <div class="center">
              <h4 class='white-text'>Don't have an account?</h4>
              <a class="waves-effect waves-light blue btn">Register</a>
            </div>
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
  <script>
  $(document).ready(function(){
    var arr=[];
    $('#log').click(function(){
      $.post("model/login.php", {
          email:$("#email").val(),
          pass:$("#password").val(),
      },
      function(resp){
          //console.log(resp);
          resp = $.parseJSON(resp);
          arr['name']=resp.name;
          arr['log']=resp.log;
          
      })
    })
   
  }) 
  </script>
</body>
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
  header('Location: contact.php');
}else{
  ?>
<?php

}

?>

</html>