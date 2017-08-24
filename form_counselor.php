<?php 
require "login/loginheader.php";
require "login/includes/functions.php";
require_once("formtools/global/api/api.php");
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Application Form</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet" media="screen">
    <link href="css/main.css" rel="stylesheet" media="screen">
  </head>
  <body>
    <div class="container">
      <div class="applicationform">
		[Counselor form placeholder]
		<br><br>
	  </div>
	  <div class="applicationform">
		<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
		<table>
		<tr>
			<th>Demographic Information</th>
		</tr>
		<tr>
			<td><p>First Name:</p></td><td><input type="text" name="first_name"></td>
		</tr>
		<tr>
			<td><p>Middle Name:</p></td><td><input type="text" name="middle_name"></td>
		</tr>
		<tr>
			<td><p>Last Name:</p></td><td><input type="text" name="last_name"></td>
		</tr>
		<tr>
			<td><p>Preferred Name:</p></td><td><input type="text" name="pref_name"></td>
		</tr>
		<tr>
			<td><p>Gender:</p></td><td><input type="radio" name="gender" value="Female"> Male<br>
									   <input type="radio" name="gender" value="Male"> Female<br></td>
		</tr>
		<tr>
			<td><p>Ethnicity:</p></td><td><input type="checkbox" name="ethnicity" value="Asian"> Asian<br>
										  <input type="checkbox" name="ethnicity" value="African American"> African American<br>
										  <input type="checkbox" name="ethnicity" value="Hispanic"> Hispanic<br>
										  <input type="checkbox" name="ethnicity" value="Middle Eastern"> Middle Eastern<br>
										  <input type="checkbox" name="ethnicity" value="Native American / Alaskan"> Native American / Alaskan<br>
										  <input type="checkbox" name="ethnicity" value="Native Hawaiian / Pacific Islander"> Native Hawaiian / Pacific Islander<br>
										  <input type="checkbox" name="ethnicity" value="White"> White<br></td>
		</tr>
		</table>
		<table>
		<th>Contact Information</th>
		<tr>
			<td><p>Parent's or Guardian's Email Address:</p></td><td><input type="text" name="parent_email"></td>
		</tr>
		<tr>
			<td><p>Student's Phone Number (Including Area Code):</p></td><td><input type="tel" name="phone" placeholder="(***)***-****"></td>
		</tr>
		<tr>
			<td><p>Home Phone Number (Including Area Code):</p></td><td><input type="tel" name="home_phone" placeholder="(***)***-****"></td>
		</tr>
		</table>
		<table>
		<tr>
			<td><p>Street Address:</p></td><td><input type="text" name="address"></td>
		</tr>
		<tr>
			<td><p>City:</p></td><td><input type="text" name="city"></td>
		</tr>
		<tr>
			<td><p>Zip Code:</p></td><td><input type="text" name="zip"></td>
		</tr>
		</table>
		
		<br><br>
	  </div>
	  <div class="form-signin">
        <a href="login/logout.php" class="btn btn-default btn-lg btn-block">Logout</a>
      </div>
    </div> <!-- /container -->
  </body>
</html>