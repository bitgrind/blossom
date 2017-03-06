<?php

 // Prevent accidental XSS
 header("Content-type: text/plain");

 // Run the script - make sure that your SSH key is set with *no* password
 if ( $_POST['payload'] ) {
  shell_exec("./pull.sh");
}
echo ini_get("disable_functions");
?>
<h1>Auto.php</h1>
<?php echo ini_get("disable_functions"); ?>
<h2>Auto Deployment</h2>
<h2>Auto Deployment change again!</h2>
