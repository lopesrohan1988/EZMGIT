<?php
session_start();
require 'functions.php';

if (isset($_POST['add']))
{	
addSociety($_POST['sid'],$_POST['sname'],$_POST['sregnumber'],$_POST['stype']);

header("Location: index.php?sflag=y");
}
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<title>Add Society</title>
</head>
<body>
<div class="container">

<div class="hero-unit">
  <h1>Hello <?php echo $_SESSION['FULLNAME']; ?></h1>
  <p>Welcome to FAKE EZM</p>
  </div>
  <div class="span4">
</div>
 <ul class="nav nav-list">
  
	<form action="<?php $_PHP_SELF ?>" method="post">
		<li class="nav-header">Society ID: <input type="text" name="sid"></li>
		<br>
		<li class="nav-header">Society Name: <input type="text" name="sname"></li>
		<br>
		<li class="nav-header">Society Reg. Number: <input type="text" name="sregnumber"></li>
		<br>
		<li class="nav-header">Society Type: <select name="stype">
				<option value="REG">Residential</option>
				<option value="COM">Commercial</option>

		</select></li>
		<br> <input type="submit" name="add">
	</form>
</ul></div>
</body>
</html>