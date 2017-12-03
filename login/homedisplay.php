<?php 
    require "loginheader.php";
	require "includes/functions.php";
	require "includes/dbconn.php";
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="../css/bootstrap.css" rel="stylesheet" media="screen">
    <link href="../css/main.css" rel="stylesheet" media="screen">
  </head>
  <body>
    <div class="container">
      <div class="form-signin">
        <?php
            switch ($_SESSION['role']) {
                case "counselor":
                    echo "<a href='../compositeform.php'>Composite Form</a><br><br><a href='../counselorrecommendationform.php'>Recommendation Form</a><br><br>";
                    break;
                case "teacher":
                    echo "<a href='../teacherrecommendationform.php'>Recommendation Form</a><br><br>";
                    break;
                case "student":
                    echo "<a href='../studentapplicationform.php'>Application Form</a><br><br>";
                    break;
                default:
                    echo "Error with switch/case statement";
            }
        ?>
        <a href="../login/logout.php" class="btn btn-default btn-lg btn-block">Logout</a>
      </div>
    </div> <!-- /container -->
  </body>
</html>