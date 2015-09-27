<?php
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'EZM');    // DB username
define('DB_PASSWORD', 'welcome1');    // DB password
define('DB_DATABASE', 'EZ');      // DB name
$connection = mysql_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD,DB_DATABASE) or die(mysqli_connect_error());
$database = mysql_select_db(DB_DATABASE) or die( "Unable to select database");
?>