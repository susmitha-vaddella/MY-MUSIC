<?php
/* Database credentials. */
define('DB_SERVER', 'us-cdbr-east-03.cleardb.com');
define('DB_USERNAME', 'b0ede556e62e4b');
define('DB_PASSWORD', '170d8cad');
define('DB_NAME', 'heroku_fd6d25c0e48f745');
 
/* Attempt to connect to MySQL database */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Check connection
if($link === false){
   die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>
