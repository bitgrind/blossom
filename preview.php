<?php
include_once  "php/connect.php";
$previewUserId = $_GET["userId"];
$previewContentId = $_GET["contentId"];

$previewSql ="SELECT * FROM `content` WHERE `contentId`=".$previewContentId;

/* Prepare statement */
if($_GET["contentId"]) {
  if($res = $conn->query($previewSql)){
    while($row = $res->fetch_assoc()) {
      $previewContentId         = $row['contentId'];
      $previewUserId            = $row['contentUserId'];
      $previewContactId         = $row['contentContactId'];
      $previewStyle             = $row['contentStyle'];
      $previewBusinessName      = $row['contentBusinessName'];
      $previewDiffDesc          = $row['contentDifferentStatement'];
      $previewShortDesc         = $row['contentShortDesc'];
      $previewUniqueDesc        = $row['contentUniqueDesc'];
      $previewBusinessPitch     = $row['contentBusinessPitch'];
      $previewServcies          = $row['contentServices'];
      $previewContentFb         = $row['contentFb'];
      $previewContentIg         = $row['contentIg'];
      $previewContentLk         = $row['contentLk'];
      $previewContentTw         = $row['contentTw'];
    }
  }
}

if($previewContactId){
  $previewContactSql ="SELECT * FROM `contact` WHERE `contactId`=".$previewContactId;
  if($res2 = $conn->query($previewContactSql)){
    while($row2 = $res2->fetch_assoc()) {
      $contactId            = $row2['contactId'];
      $contactContentId     = $row2['contactContentId'];
      $contactName          = $row2['contactName'];
      $contactNumber        = $row2['contactNumber'];
      $contactEmail         = $row2['contactEmail'];
      $contactAddress       = $row2['contactAddress'];
      $contactCity          = $row2['contactCity'];
      $contactState         = $row2['contactState'];
      $contactZip           = $row2['contactZip'];

    }
  }
}
$conn->close();
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <!-- Bootstrap core CSS -->
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <!-- Custom Google Web Font -->
  <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <!-- Add custom CSS here -->
  <link rel="stylesheet" href="css/preview.css">
  <script type="text/javascript">
  $(function(){
    $("#change").click(function(){
      var val = $("#styles").val();
      if (val === "st1"){
        window.open("preview.php?contentId=" + <?php echo $previewContentId ?>, "_self")
      }else if(val ==="st3"){
        window.open("demo2.php?contentId=" + <?php echo $previewContentId ?>,"_self")
      }else if(val ==="st4"){
        window.open("demo2b.php?contentId=" + <?php echo $previewContentId ?>,"_self")
      }
    });
  });//jQuery
  </script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <title>Preview your page</title>
</head>
<body>
  <span id="body-bg"></span>
  <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar">Here</span>
          <span class="icon-bar">There</span>
          <span class="icon-bar">Everywhere</span>
        </button>
        <a class="navbar-brand" href=""><?php echo $previewBusinessName; ?></a>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse navbar-right navbar-ex1-collapse">
        <ul class="nav navbar-nav">
          <li><a href="#about">About</a>
          </li>
          <li><a href="#services">Services</a>
          </li>
          <li><a href="#contact">Contact</a>
          </li>
        </ul>
      </div>
      <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
  </nav>

  <div class="intro-header">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="intro-message">
            <h1><?php echo $previewBusinessName; ?></h1>
            <hr class="intro-divider">
            <h3><?php echo $previewDiffDesc; ?></h3>
            <ul class="list-inline intro-social-buttons">
              <li><a href="http://blossom.rosecityvinyl.com" class="btn btn-default btn-lg"><i class="fa fa-twitter fa-fw"></i> <span class="network-name">Twitter</span></a>
              </li>
              <li><a href="http://blossom.rosecityvinyl.com" class="btn btn-default btn-lg"><i class="fa fa-github fa-fw"></i> <span class="network-name">Github</span></a>
              </li>
              <li><a href="#" class="btn btn-default btn-lg"><i class="fa fa-linkedin fa-fw"></i> <span class="network-name">Linkedin</span></a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <!-- /.container -->
  </div>
  <!-- /.intro-header -->
  <div class="firstContent content-section-a">
    <div class="container">
      <div class="row">
        <div class="col-lg-5 col-sm-6">
          <hr class="section-heading-spacer">
          <div class="clearfix"></div>
          <h2 class="section-heading"><?php echo $previewDiffDesc; ?></h2>
          <p class="lead"><?php echo $previewShortDesc; ?></p>
        </div>
        <div class="col-lg-5 col-lg-offset-2 col-sm-6">
          <img class="img-responsive" src="img/demo2/ipad.png" alt="">
        </div>
      </div>
    </div>
    <!-- /.container -->
  </div>
  <!-- /.content-section-a -->

  <div class="content-section-b">
    <div class="container">
      <div class="row">
        <div class="col-lg-5 col-lg-offset-1 col-sm-push-6  col-sm-6">
          <hr class="section-heading-spacer">
          <div class="clearfix"></div>
          <h2 class="section-heading"><?php echo $previewUniqueDesc?></h2>
          <p class="lead"><?php echo $previewBusinessPitch; ?></p>
        </div>
      </div>
    </div>
    <!-- /.container -->
  </div>
  <!-- /.content-section-b -->

  <div class="content-section-a">
    <div class="container">
      <div class="row">
        <div class="col-lg-5 col-sm-6">
          <hr class="section-heading-spacer">
          <div class="clearfix"></div>
          <h2 class="section-heading">Google Web Fonts and
            <br>Font Awesome Icons</h2>
            <p class="lead">This template features the 'Lato' font, part of the <a target="_blank" href="http://www.google.com/fonts">Google Web Font library</a>, as well as <a target="_blank" href="http://fontawesome.io">icons from Font Awesome</a>.</p>
          </div>
        </div>
      </div>
      <!-- /.container -->
    </div>
    <!-- /.content-section-a -->

    <div class="banner">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <h2>Connect with <?php echo $previewBusinessName; ?> Team:</h2>
          </div>
          <div class="col-lg-6">
            <ul class="list-inline banner-social-buttons">
              <li><a href="<?php echo $previewContentFb; ?>" class="btn btn-default btn-lg"><i class="fa fa-twitter fa-fw"></i> <span class="network-name">Twitter</span></a>
              </li>
              <li><a href="http://github.com/bitgrind/blossom" class="btn btn-default btn-lg"><i class="fa fa-github fa-fw"></i> <span class="network-name">Github</span></a>
              </li>
              <li><a href="<?php echo $previewContentLk; ?>" class="btn btn-default btn-lg"><i class="fa fa-linkedin fa-fw"></i> <span class="network-name">Linkedin</span></a>
              </li>
            </ul>
          </div>
          <div class="col-md-12">

          </div>
        </div>
        <div class="col-md-12 contact">
          <h1>Contact</h1>
          <ul class="contact-info">
            <li><h2>Name: <?php echo $contactName; ?></h2></li>
            <li><h2>Number: <?php echo $contactNumber; ?></h2></li>
            <li><h2>Email: <?php echo $contactEmail; ?></h2></li>
            <li><h2>Address: <?php echo $contactAddress; ?></h2></li>
            <ul>
              <li><h2>City: <?php echo $contactCity; ?></h2></li>
              <li><h2>State: <?php echo $contactState; ?></h2></li>
              <li><h2>Zipcode: <?php echo $contactZip; ?></h2></li>
            </ul>
          </ul>
        </div>
      </div>
      <!-- /.container -->
      <footer>
        <hr class="intro-divider">
        <div class="container">
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
    </div>
    <!-- /.banner -->
    <div id="footerStyle">
      <form>
        <div class="form-group">
          <label>Choose your style!</label>
          <select class="form-control" id="styles">
            <option value="st1" name="styleChange" selected="selected">Style 1</option>
            <option value="st2" name="styleChange">Style 2</option>
            <option value="st3" name="styleChange">Style 3</option>
            <option value="st4" name="styleChange">Style 4</option>
          </select>
          <button type="button" name="button" class="btn btn-default" id="change">Change</button>
        </div>
      </form>
    </div>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  </body>
</html>
