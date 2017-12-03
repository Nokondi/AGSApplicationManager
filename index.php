<?php 
    require "login/loginheader.php";
	require "login/includes/functions.php";
	require "login/includes/dbconn.php";
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="refresh" content="3; url=login/homedisplay.php" />
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet" media="screen">
    <link href="css/main.css" rel="stylesheet" media="screen">
  </head>
  <body>
    <div class="container">
      <div class="form-signin">
          <div class="alert alert-success">You are<strong> logged in</strong>. 
              If you are not redirected to the home page, click <a href="login/homedisplay.php">here</a></div>
            
        <a href="login/logout.php" class="btn btn-default btn-lg btn-block">Logout</a>
      </div>
    </div> <!-- /container -->
  </body>
</html>
