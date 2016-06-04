<?php
require_once('../../includes/functions.php');
require_once('../../includes/session.php');
if (!$session->is_logged_in()) { redirect_to("login.php"); }

print_r($_SESSION['user_id']);
?>
<html>
  <head>
    <title>Photo Gallery</title>
    <link href="../stylesheets/main.css" media="all" rel="stylesheet" type="text/css" />
  </head>
  <body>
    <div id="header">
      <h1>Photo Gallery</h1>
    </div>
    <div id="main">
		<h2>Menu</h2>
		<h4> welcome to <?php echo $_SESSION['user_id']; ?></h4>
 
		
		</div>
		
    <div id="footer">Copyright <?php echo date("Y", time()); ?>, Kevin Skoglund</div>
  </body>
</html>
