<?php
session_start(); 
?>
<!doctype html>
<html xmlns:fb="http://www.facebook.com/2008/fbml">
  <head>
    <title>Login with Facebook</title>
<link href="http://www.bootstrapcdn.com/twitter-bootstrap/2.2.2/css/bootstrap-combined.min.css" rel="stylesheet"> 
 </head>
  <body>
  <?php if (isset($_SESSION['FBID'])? true : false): ?>      <!--  After user login  -->
<div class="container">
<div class="hero-unit">
  <h1>Hello <?php echo $_SESSION['FULLNAME']; ?></h1>
  <p>Welcome to FAKE EZM</p>
  </div>
<div class="span4">
 <ul class="nav nav-list">
<li class="nav-header">Image</li>
	<li><img src="https://graph.facebook.com/<?php echo $_SESSION['FBID']; ?>/picture"></li>
<li class="nav-header">Facebook fullname</li>
<li><?php echo $_SESSION['FULLNAME']; ?></li>
<li class="nav-header">Facebook Email</li>
<li><?php echo $_SESSION['EMAIL']; ?></li>
<li class="nav-header">You are Email ID</li>
<li><?php echo  $_SESSION['EMAIL']; ?></li>
<li><a href="addSociety.php">Add new Society</a></li>
<li><a href="viewSociety.php">View Society Details</a></li>

<?php
    if(isset($_GET['sflag'])){
        echo "<b><i>Society Added Successfully</i></b>"; // print_r($_GET);       
    }
?>

<div><a href="logout.php">Logout</a></div>
</ul></div></div>
    <?php else: ?>     <!-- Before login --> 
<div class="container">
<h1>Welcome to EZM</h1>
          
<div>
      <a href="fbconfig.php">Login with Facebook</a></div>
	 
	  </div>
      </div>
    <?php endif ?>
  </body>
</html>
