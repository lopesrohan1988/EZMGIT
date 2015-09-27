<?php
session_start ();
require 'functions.php';

?>


<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<title>View Society</title>
</head>
<body>
	<div class="container">

		<div class="hero-unit">
			<h1>Hello <?php echo $_SESSION['FULLNAME']; ?></h1>
			<p>Welcome to FAKE EZM</p>
		</div>
		<div class="span4"></div>

		<table>
			<thead>
				<tr>
					<th>Society Name</th>
					<th>Society Reg.</th>
					<th>Society Type</th>
				</tr>
			</thead>
			<tbody>
 				<?php 

 				$result = getSociety();
 					
 				while ($row1 = mysql_fetch_array($result)) 
 					{
 						$sname=$row1['S_NAME'];
 						$stype=$row1['S_TYPE'];
 						$sreg=$row1['S_REG_NUMBER'];
 						echo "<tr><td>$sname</td><td>$sreg</td>
 										<td>$stype</td>
 									</tr>";
 					}
 					?>
			</tbody>
		</table>

</body>
</html>