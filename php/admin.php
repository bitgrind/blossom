<?php
  include_once  "php/connect.php";
  $adminUserId = $_GET["userId"];
  $adminContentId = $_GET["contentId"];
  print_r($GLOBALS);
  
  $adminSql ="SELECT * FROM `content` WHERE `contentId`=".$adminContentId;
	print_r($adminSql);

  /* Prepare statement */
  if($_GET["contentId"]) {
    if($res = $conn->query($adminSql)){
		while($row = $res->fetch_assoc()) {
		print_r($row);//full array
		print_r($row['contentId']);//specific value
		$previewId = $row['contentId']; 
		
		//[contentId] => 15 [contentUserId] => 0 [contentContactId] => 1 [contentStyle] => [contentBusinessName] => [contentDifferentStatement] => [contentShortDesc] => [contentUniqueDesc] => [contentBusinessPitch] => [contentServices] => [contentFb] => [contentIg] => [contentLk] => [contentTw] => 
    	}
    }
  } else {
    echo "query Failure" .$conn->error;
  }
  $conn->close();
 ?>

<!DOCTYPE html>
<html>

<head>
  <!-- Meta Tags -->
  <meta charset="UTF-8">
  <meta name="description" content="Web Application">
  <meta name="keywords" content="HTML,CSS,JQuery,JavaScript, php, sql">
  <meta name="author" content="Ryan Jones">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Blossom Dashboard</title>

  <!-- Color Wheel Plug in -->
  <link type="text/css" rel="stylesheet" href="css/admin/wheelcolorpicker.css" />
  <!-- Bootstrap -->
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <!-- Custom CSS -->
  <!-- <link href="dist/css/flat-ui.min.css" rel="stylesheet"> -->
  <link href="css/admin/admin-styles.css" rel="stylesheet" type="text/css">
  <script>var jscontentId = <?php echo $previewId; ?>;console.log(jscontentId);</script>
</head>

<body class="bg-silver">
  <div class="container-fluid main-container">
      <div class="row header">
        <div class="col-md-6">
          <div class="logo">
            <h2><a href="index.html">Blossom</a></h2>
          </div>
        </div>
        <div class="col-md-6">
          <ul class="mainNav">
            <li>nav1</li>
            <li>nav2</li>
            <li>nav3</li>
          </ul>
        </div>
    </div>
      <div class="row full-height">
        <div class="col-md-2 side-nav1 full-height container">
          <h2>Dashboard</h2>
          <div class="dropdown">
            <button class="btn btn-primary dropdown-btn dropdown-toggle" type="button" id="menu1" data-toggle="dropdown"><span id="active-dropdown-text">Site 1</span>  <span class="caret"></span></button>
            <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
              <li role="presentation"><a role="menuitem" tabindex="-1" href="#" id="site1" value="site1">Site1</a></li>
              <li role="presentation"><a role="menuitem" tabindex="-1" href="#" id="site2" value="site2">Site2</a></li>
            </ul>
          </div>
          <hr />
          <ul class="sideNav">
            <li><a href="#" id="editNav">Edit</a></li>
            <li><a href="#" id="previewNav">Preview</a></li>
            <li><a href="#" id="accountNav">Account</a></li>
           <!-- <li><a href="#">Addons</a></li>
            <li><a href="#">Cart</a></li>
            <li><a href="#">Image Upload</a></li> -->
            <li><a href="#" id="publishNav">Publish</a></li>
          </ul>
        </div>
        <div class="col-md-10">
          <div class="container bg-image">
            <div class="edit">
              <div class="edit-header">
                <h1>Dashboard Editor</h1>
              </div>
              <div class="edit-body">
                <div class="row">
                  <div class="col-md-6">
                    <div class="panel panel-primary">
                      <div class="panel-heading">
                        <h2>Header <?php echo $previewId;?></h2>
                      </div>
                      <div class="panel-body">
<!--
                        <div class="input-group">
                          <label for="header-text">Header Text</label>
                          <textarea class="form-control" id="header-text" name="header-text" placeholder="Type a new header" type="text"></textarea>
                        </div>
-->
                        <!-- Need to do work here, see trello comment -->
                        <div class="input-group">
                          <label for="header-font-family">Font Family</label>
                          <div class="dropdown">
                            <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Font Choices
                            <span class="caret"></span></button>
                            <ul class="dropdown-menu">
                            <li><a href="#" class="serif-font">Serif</a></li>
                            <li><a href="#" class="sans-serif-font">Sans-Serif</a></li>
                            <li><a href="#" class="cursive-font">Cursive</a></li>
                            </ul>
                          </div>
                        </div>
                        <div class="input-group">
                          <label for="header-color">Header Color</label>
                          <input type="text" id="header-color" name="header-color" class="form-control" data-wheelcolorpicker="" data-wcp-sliders="wv" data-wcp-preview="true">
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="panel panel-primary">
                      <div class="panel-heading">
                        <h2>Paragraph</h2>
                      </div>
                      <div class="panel-body">
<!--
                        <div class="input-group">
                          <label for="header-text">Header Text</label>
                          <textarea class="form-control" id="header-text" name="header-text" placeholder="Type a new header" type="text"></textarea>
                        </div>
-->
                        <div class="input-group">
                          <label for="paragraph-font-family">Font Family</label>
                          <div class="dropdown">
                            <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Font Choices
                            <span class="caret"></span></button>
                            <ul class="dropdown-menu">
                            <li><a href="#" class="serif-font">Serif</a></li>
                            <li><a href="#" class="sans-serif-font">Sans-Serif</a></li>
                            <li><a href="#" class="cursive-font">Cursive</a></li>
                            </ul>
                          </div>
                        </div>
                        <div class="input-group">
                          <label for="paragraph-color">Paragraph Color</label>
                          <input type="text" id="paragraph-color" name="paragraph-color" class="form-control" data-wheelcolorpicker="" data-wcp-sliders="wv" data-wcp-preview="true">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <div class="panel panel-primary">
                      <div class="panel-heading">
                        <h2>Background Color</h2>
                      </div>
                      <div class="panel-body">
<!--
                        <div class="input-group">
                          <label for="header-text">Header Text</label>
                          <textarea class="form-control" id="header-text" name="header-text" placeholder="Type a new header" type="text"></textarea>
                        </div>
-->
                        <div class="input-group">
                          <label for="header-font-family">Select a preselected color</label>
                          <div class="dropdown">
                            <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Color Choices
                            <span class="caret"></span></button>
                            <ul class="dropdown-menu">
                              <li><a href="#"><span class="firebrick-red">Firebrick Red</span></a></li>
                              <li><a href="#" class="collosal-blue"><span class="collosal-blue">Collosal Blue</span></a></li>
                              <li><a href="#" class="tango-orange"><span class="tango-orange">Tango Orange</span></a></li>
                            </ul>
                          </div>
                        </div>
                        <div class="input-group">
                          <label for="background-color">Background Color</label>
                          <input type="text" id="background-color" name="background-color" class="form-control" data-wheelcolorpicker="" data-wcp-sliders="wv" data-wcp-preview="true">
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="panel panel-primary">
                      <div class="panel-heading">
                        <h2>Unknown</h2>
                      </div>
                      <div class="panel-body">
<!--
                        <div class="input-group">
                          <label for="header-text">Header Text</label>
                          <textarea class="form-control" id="header-text" name="header-text" placeholder="Type a new header" type="text"></textarea>
                        </div>
-->
                        <div class="input-group">
                          <label for="header-font-family">Font Family</label>
                          <div class="dropdown">
                            <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Font Choices
                            <span class="caret"></span></button>
                            <ul class="dropdown-menu">
                            <li><a href="#" class="serif-font">Serif</a></li>
                            <li><a href="#" class="sans-serif-font">Sans-Serif</a></li>
                            <li><a href="#" class="cursive-font">Cursive</a></li>
                            </ul>
                          </div>
                        </div>
                        <div class="input-group">
                          <label for="header-color">Paragraph Color</label>
                          <input type="text" id="header-color" name="header-color" class="form-control" data-wheelcolorpicker="" data-wcp-sliders="wv" data-wcp-preview="true">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="site1">
              <div class="site1-header">
                <h2>ZnergyTheAndroid.com</h2>
              </div>
              <div class="site1-body">
                <h3>Android Development</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque placerat erat convallis lorem sodales, ac volutpat justo fermentum. Suspendisse congue ipsum at vestibulum gravida. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque placerat erat convallis lorem sodales, ac volutpat justo fermentum. Suspendisse congue ipsum at vestibulum gravida.</p>
                <h3>Java</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque placerat erat convallis lorem sodales, ac volutpat justo fermentum. Suspendisse congue ipsum at vestibulum gravida. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque placerat erat convallis lorem sodales, ac volutpat justo fermentum. Suspendisse congue ipsum at vestibulum gravida.</p>
                <h3>HTML/CSS</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque placerat erat convallis lorem sodales, ac volutpat justo fermentum. Suspendisse congue ipsum at vestibulum gravida. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque placerat erat convallis lorem sodales, ac volutpat justo fermentum. Suspendisse congue ipsum at vestibulum gravida.</p>
                <h3>Java + Script</h3>
                <footer>Lorem ipsum dolor sit amet, consectetur adipiscing elite. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque placerat erat convallis lorem sodales, ac volutpat justo fermentum.</footer>
              </div>
            </div>
            <div class="site2">
              <div class="site2-header">
                <h2>ThisIsCamelCase.com</h2>
              </div>
              <div class="site2-body">
                <h3>Camel Case</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque placerat erat convallis lorem sodales, ac volutpat justo fermentum. Suspendisse congue ipsum at vestibulum gravida. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque placerat erat convallis lorem sodales, ac volutpat justo fermentum. Suspendisse congue ipsum at vestibulum gravida.</p>
                <h3>Writing</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque placerat erat convallis lorem sodales, ac volutpat justo fermentum. Suspendisse congue ipsum at vestibulum gravida. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque placerat erat convallis lorem sodales, ac volutpat justo fermentum. Suspendisse congue ipsum at vestibulum gravida.</p>
                <h3>Things to know</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque placerat erat convallis lorem sodales, ac volutpat justo fermentum. Suspendisse congue ipsum at vestibulum gravida. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque placerat erat convallis lorem sodales, ac volutpat justo fermentum. Suspendisse congue ipsum at vestibulum gravida.</p>
                <h3>The truth about letters</h3>
                <footer>Lorem ipsum dolor sit amet, consectetur adipiscing elite. Suspendisse congue ipsum at vestibulum gravida. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque placerat erat convallis lorem sodales, ac volutpat justo fermentum. Suspendisse congue ipsum at vestibulum gravida.</footer>
              </div>
            </div>
          <div class="account">
            <div class="account-header">
            </div>
            <div class="account-body">
              <div class="panel panel-primary">
                <div class="panel-heading">
                  <h2>Account Information</h2>
                </div>
                <div class="panel-body">
                  <table class="table">
                    <thead>
                      <tr>
                        <th><a href="#">Email</a></th>
                        <th><a href="#">Websites</a></th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th class="user-info" id="accountEmail">example@gmail.com</th>
                        <th class="user-info" id="accountWebsite">https://blossom.com</th>
                      </tr>
                    </tbody>
                  </table>
                  <div class="row">
                    <div class="col-md-6">
                      <h3 class="panelH3">Change Password</h3>
                  <form class="changePassword">
                    <div class="input-group">
                      <span class="input-group-addon">Current Password</span>
                      <input class="form-control" type="password" id="accountPassword" />
                    </div>
                    <div class="input-group">
                      <span class="input-group-addon">New Password</span>
                      <input class="form-control" type="password" id="newAccountPassword" />
                    </div>
                    <div class="input-group">
                      <span class="input-group-addon">Confirm Password</span>
                      <input class="form-control" type="password" id="changePasswordConfirmation" />
                    </div>
                    <div class="buttonStyles change-pass-btn">
                      <a href="https://google.com" target="_blank">
                        <button class="btn btn-primary" type="submit" id="changePasswordBtn">
                          <span class="glyphicon glyphicon-transfer iconStyle"></span>Change Password
                        </button>
                      </a>
                    </div>
                  </form>
                    </div>
                    <div class="col-md-6">
                      <h3 class="panelH3">Change Email</h3>
                  <form class="changeEmail">
                    <div class="input-group">
                      <span class="input-group-addon">Current Email</span>
                      <input class="form-control" type="text" value="example@gmail.com" readonly>
                    </div>
                    <div class="input-group">
                      <span class="input-group-addon">Change Email</span>
                      <input class="form-control" type="email">
                    </div>
                    <div class="buttonStyles change-email-btn">
                      <a href="https://google.com" target="_blank">
                        <button class="btn btn-primary" type="submit" id="changeEmailBtn">
                          <span class="glyphicon glyphicon-transfer iconStyle"></span>Change Email
                        </button>
                      </a>
                    </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="domains">
            <div class="domains-header">
            </div>
            <div class="domains-body">
              <div class="panel panel-primary">
                <div class="panel-heading">
                  <h2>Registered Domains</h2>
                </div>
                <div class="panel-body">
                  <table class="table">
                    <thead>
                      <tr>
                        <th><a href="#">ID</a></th>
                        <th><a href="#">Domain URL</a></th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th class="user-info" id="domainsID1">1</th>
                        <th class="user-info" id="domainsURL1">https://www.blossom.com</th>
                      </tr>
                      <tr>
                        <th class="user-info" id="domainsID2">2</th>
                        <th class="user-info" id="domainsURL2">https://www.unitarian.com</th>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
            </div>
          </div>
        </div>
    </div>
  </div>
  <!-- JQuery JS -->
  <script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
  <!-- Color Wheel JS Plugin -->
  <script type="text/javascript" src="js/admin/jquery.wheelcolorpicker-3.0.2.min.js"></script>
  <!-- Bootstrap JS -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <!-- Admin JS -->
  <script type="text/javascript" src="js/admin/admin.js"></script>
  <!-- Default JS -->
  <script type="text/javascript" src="js/default.js"></script>
</body>

</html>
