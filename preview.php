<?php
include_once  "php/connect.php";
$adminUserId = $_GET["userId"];
$adminContentId = $_GET["contentId"];

$previewSql="SELECT * FROM 'content' WHERE 'contentId'=".$previewContentId;


  /* Prepare statement */
  if($_GET["contentId"]) {
    if($res = $conn->query($previewSql)){
		while($row = $res->fetch_assoc()) {
		print_r($row);//full array
		print_r($row['contentId']);//specific value
		$previewId = $row['contentId'];
		$userId = $row['userId'];
		$contactId = $row['contactId'];
		$cssLink = $row['contentStyle'];
		$businessName = $row['contentBusinessName'];
		$diffStatement = $row['contentDifferentStatement'];
		$description= $row['contentShortDesc'];
		$description2= $row['contentUniqueDesc'];
		$businessPitch= $row['contentBusinessPitch'];
		$service1= $row['contentServices'];
		$facebook= $row['contentFb'];
		$instagram= $row['contentIg'];
		$linkedin= $row['contentLk'];
		$twitter= $row['contentTw'];
		//[contentId] => 15 [contentUserId] => 0 [contentContactId] => 1 [contentStyle] => [contentBusinessName] => [contentDifferentStatement] => [contentShortDesc] => [contentUniqueDesc] => [contentBusinessPitch] => [contentServices] => [contentFb] => [contentIg] => [contentLk] => [contentTw] =>
    	}
    }
  } else {
    echo "query Failure" .$conn->error;
  }
  $conn->close();
  echo "ecco";
  echo "ecco";
  echo "ecco";
  echo "ecco";
  echo "ecco";
  echo "ecco";
  echo "ecco";
 ?>

 <script type="text/javascript">
 //php vars
 var test ="testString";

 </script>


 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <!-- Bootstrap core CSS -->
      <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" type="text/css">
     <!-- Custom Google Web Font -->
     <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">
     <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
     <!-- Add custom CSS here -->
     <link rel="stylesheet" href="">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
     <script src="js/preview.js"></script>
     <title>Preview your page</title>
   </head>
   <body>
     <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
         <div class="container">
             <div class="navbar-header">
                 <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                     <span class="sr-only">Toggle navigation</span>
                     <span class="icon-bar">Here</span>
                     <span class="icon-bar">There</span>
                     <span class="icon-bar">Everywhere</span>
                 </button>
                 <a class="navbar-brand" href="">Awesome Sauce</a>
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
                         <h1>hey <?php echo $previewId;?></h1>
                         <h3>A Template by Blossom</h3>
                         <hr class="intro-divider">
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
     <div class="content-section-a">
         <div class="container">
             <div class="row">
                 <div class="col-lg-5 col-sm-6">
                     <hr class="section-heading-spacer">
                     <div class="clearfix"></div>
                     <h2 class="section-heading">Death to the Stock Photo:
                         <br>Special Thanks</h2>
                     <p class="lead">A special thanks to Death to the Stock Photo for providing the photographs that you see in this template. <a target="_blank" href="http://join.deathtothestockphoto.com/">Visit their website</a> to become a member.</p>
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
                     <h2 class="section-heading">3D Device Mockups
                         <br>by Coolpeeps</h2>
                     <p class="lead">Turn your 2D designs into high quality, 3D product shots in seconds using free Photoshop actions by PSDCovers! <a target="_blank" href="http://www.psdcovers.com/">Visit their website</a> to download some of their awesome, free photoshop actions!</p>
                 </div>
                 <div class="col-lg-5 col-sm-pull-6  col-sm-6">
                     <img class="img-responsive" src="img/demo2/doge.png" alt="">
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
                 <div class="col-lg-5 col-lg-offset-2 col-sm-6">
                     <img class="img-responsive" src="img/demo2/phones.png" alt="">
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
                     <h2>Connect with Blossom Team:</h2>
                 </div>
                 <div class="col-lg-6">
                     <ul class="list-inline banner-social-buttons">
                         <li><a href="" class="btn btn-default btn-lg"><i class="fa fa-twitter fa-fw"></i> <span class="network-name">Twitter</span></a>
                         </li>
                         <li><a href="http://github.com/bitgrind/blossom" class="btn btn-default btn-lg"><i class="fa fa-github fa-fw"></i> <span class="network-name">Github</span></a>
                         </li>
                         <li><a href="#" class="btn btn-default btn-lg"><i class="fa fa-linkedin fa-fw"></i> <span class="network-name">Linkedin</span></a>
                         </li>
                     </ul>
                 </div>
             </div>

         </div>
         <!-- /.container -->

     </div>
     <!-- /.banner -->

     <footer>
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

     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
   </body>
 </html>