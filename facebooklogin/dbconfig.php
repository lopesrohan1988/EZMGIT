<?php
define('DB_SERVER', '127.8.118.130:3306');
define('DB_USERNAME', 'admincRRFhGq');    // DB username
define('DB_PASSWORD', 'm9HYPyI14mYW');    // DB password
define('DB_DATABASE', 'EZ');      // DB name
$connection = mysql_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD,DB_DATABASE) or die(mysqli_connect_error());
$database = mysql_select_db(DB_DATABASE) or die( "Unable to select database");
?>