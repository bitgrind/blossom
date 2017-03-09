<?php
include_once  "php/connect.php";
 $userEmail = $_POST['emailSignUp'];
 $userPw1 = $_POST['passwordSignUp'];
 $userPw2 = $_POST['password2'];
 $insUserSql="INSERT INTO users (userId, userEmail, userPassword, userContentId, userContactId) VALUES ('','".$userEmail."', '".$userPw1."', '','')";
 if($_POST['userSignUp'] == "newUserSignUp"){
   if($conn->query($insUserSql)){
     $newId = mysqli_insert_id($conn);
     header('Location: build.php?userId='.$newId);
   }
 }
?>
<!DOCTYPE html>
<html>
<head>
  <!-- BOOTSTRAP CDN-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  <!-- typed.js-->
  <script src="js/dist/typed.min.js"></script>
  <link href="dist/css/flat-ui.min.css" rel="stylesheet">


  <!--GOOGLE FONTS-->
  <link href="https://fonts.googleapis.com/css?family=Roboto|Rasa" rel="stylesheet">

  <!--BOOTSTRAP SCROLLING NAV-->
  <link href="css/dist/scrolling-nav.css" rel="stylesheet" type="text/css" />
  <script src="js/dist/scrolling-nav.js"></script>
  <script src="js/dist/jquery.easing.min.js"></script>
  <!-- BLOSSOM SHIT-->
  <link href="css/styles.css" rel="stylesheet" type="text/css" />
  <link href="css/blossom-styles.css" rel="stylesheet" type="text/css" />
  <script src="js/home-script.js"></script>
  <title>Blossom CMS</title>
</head>
<body>
  <span id="body-bg"></span>
  <!-- Static navbar -->
  <header>
    <nav class="navbar navbar-inverse">
      <div class="container-fluid">
        <div class="navbar-header">
          <a class="navbar-brand" href="index.php" id="logo">BLOSSOM</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a data-toggle="modal" data-target="#signUp">Register</a></li>
            <li><a data-toggle="modal" data-target="#logIn">Login</a></li>
          </ul>
        </div>
        <!--/.nav-collapse -->
      </div>
      <!--/.container-fluid -->
    </nav>
  </header>
  <section class="container" id="page1">
    <div id="landingContent">
      <div>
        <h1 id="heading">Blossom makes website for</h1>
        <h1><span id="js-typed"></span></h1>
        <h2>Blossom is a CMS management system at heart and has awesome features that make organizing and managing your content a snap.</h2>
      </div>

      <div class="type-wrap">
        <div id="typed-strings">
          <p>personal users.</p>
          <p>small businesses</p>
          <p>food carts</p>
          <p>bands</p>
          <p>artists</p>
          <p>restaurants</p>
        </div>
        <span id="typed" style="white-space:pre;"></span>
      </div>



      <div id="buttons">
        <button data-toggle="modal" data-target="#signUp" type="button" class="btn btn-default">Register now!</button>
        <button type="button" class="btn btn-default"><a href="#page2" class="page-scroll"> How it works</a></button>
      </div>
    </div>
  </section>
  <!--page1-->

  <!--page2-->
  <div class="box-shadow">
    <section class="container" id="page2">
      <!-- <h1>Demo pages</h1> -->
      <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
          <li data-target="#myCarousel" data-slide-to="3"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox" id="caroImg">
          <div class="item active">
            <a href="#" data-target="#signUp" data-toggle="modal">
              <img src="img/temp1.jpg" alt="image">
            </a>
          </div>

          <div class="item">
            <a href="#" data-target="#signUp" data-toggle="modal">
              <img src="img/demo2-sample.JPG" alt="demo2 image">
            </a>
          </div>

          <div class="item">
            <!-- <a href="#" data-target="#signUp" data-toggle="modal">
              <img src="img/temp4.jpg" alt="image4">
            </a> -->
            <a href="#" data-target="#signUp" data-toggle="modal">
              <img src="img/temp4.jpg" alt="last image">
            </a>
          </div>
        </div><!-- carousel-inner -->

        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </section>

    <section class="container" id="page3">
      <div class="row">
        <br />
        <h1>Here's how it works</h1>
        <p>
          After signing up users will be able to create and modify web pages and be able preview pages before publishing. At this time there is no automatic archiving of previous designs or configurations. Uploads are permitted but limited to specific image file
          types. Users will be able to select a template and apply their own design preferences. Custom configurations are saved to the users profile.</p>
        </div>
        <div class="row" id="steps">
          <div class="col-md-4">
            <img src="img/website_templates.png" alt="" />
            <h2 id="caption">1. Choose a website template. </h2>
          </div>
          <div class="col-md-4">
            <img src="img/dashboard.jpg" alt="" />
            <h2 id="caption">2. Fill out content for your website.</h2>
          </div>
          <div class="col-md-4">
            <img src="img/foodCart1.jpg" alt="" />
            <h2 id="caption">3. Preview and publish!</h2>
          </div>
        </div>
      </section>
      <!--page2-->

      <section class="container" id="page4">
        <div class="row">
          <h1>Who should use Blossom?</h1>
          <div class="col-md-4 portfolio-item">
            <a href="#">
              <img class="img-responsive" src="img/personal.jpg" alt="">
            </a>
            <h3>
              <a href="#">Personal users</a>
            </h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
          </div>
          <div class="col-md-4 portfolio-item">
            <a href="#">
              <img class="img-responsive" src="img/artist.jpg" alt="">
            </a>
            <h3>
              <a href="#">Artists</a>
            </h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
          </div>
          <div class="col-md-4 portfolio-item">
            <a href="#">
              <img class="img-responsive" src="img/restuarant.jpg" alt="">
            </a>
            <h3>
              <a href="#">Restaurants</a>
            </h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4 portfolio-item">
            <a href="#">
              <img class="img-responsive" src="img/band.jpg" alt="">
            </a>
            <h3>
              <a href="#">Bands</a>
            </h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
          </div>
          <div class="col-md-4 portfolio-item">
            <a href="#">
              <img class="img-responsive" src="img/smallBS.jpg" alt="">
            </a>
            <h3>
              <a href="#">Small Businesses</a>
            </h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
          </div>
          <div class="col-md-4 portfolio-item">
            <a href="#">
              <img class="img-responsive" src="img/foodCart.jpg" alt="">
            </a>
            <h3>
              <a href="#">Food Carts</a>
            </h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
          </div>
        </div>
      </section>
      <footer>
        <hr class="intro-divider">
        <div>
          <h1><a href="?">Blossom</a></h1>
          <div class="row">
            <div class="col-lg-12">
              <ul class="list-inline">
                <li><a href="#home">Home</a>
                </li>
                <li class="footer-menu-divider">&sdot;</li>
                <li><a href="#about">About</a>
                </li>
                <li class="footer-menu-divider">&sdot;</li>
                <li><a href="#services">Services</a>
                </li>
                <li class="footer-menu-divider">&sdot;</li>
                <li><a href="#contact">Contact</a>
                </li>
              </ul>
              <p class="copyright text-muted small">Copyright &copy; Your Company 2013. All Rights Reserved</p>
            </div>
          </div>
        </div>
      </footer>

      <!---page3-->



      <!-- MODAL HERE -->
      <div id="logIn" class="modal fade" role="dialog">
        <div class="modal-dialog">
          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title">Sign in to Blossom</h4>
            </div>
            <div class="modal-body">
              <form id="formLogIn" role="form" action="" method="post" class="registration-form">
                <div class="form-group">
                  <label class="sr-only" for="form-email">Email</label>
                  <input type="text" name="form-email" placeholder="Username..." class="form-email form-control" id="email">
                </div>
                <div class="form-group">
                  <label class="sr-only" for="form-password">Password</label>
                  <input type="password" name="form-password" placeholder="Password..." class="form-password form-control" id="password">
                </div>

                <div class="modal-footer">
                  <button type="submit" class="btn btn-default">Log In</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- END OF LOG IN MODAL-->

      <!-- MODAL HERE -->
      <div id="signUp" class="modal fade" role="dialog">
        <div class="modal-dialog">
          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title">Sign up for free!</h4>
            </div>
            <div class="modal-body">
              <form id="register" role="form" action="?" method="POST" class="registration-form">
                <div class="form-group">
                  <label class="sr-only" for="form-email">Email</label>
                  <input name="emailSignUp" id="emailSignUp" type="text" placeholder="Email..." class="form-email form-control" required>
                </div>
                <div class="form-group">
                  <label class="sr-only" for="form-password">Password </label>
                  <input name="passwordSignUp" id="passwordSignUp" type="password" placeholder="Password..." class="form-password form-control" required>
                </div>
                <div class="form-group">
                  <label class="sr-only" for="form-password2">Confrim password</label>
                  <input name="password2" id="password2" type="password" placeholder="Confirm password..." class="form-password2 form-control" required>
                </div>
                <div class="modal-footer">
                  <button name="userSignUp" value="newUserSignUp" type="submit" class="btn btn-default">Sign me up!</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
  </div>
  <!-- END OF SING UP MODAL-->
</body>
</html>