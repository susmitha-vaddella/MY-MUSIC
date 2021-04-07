<?php
// Include config file
require_once "config.php";
 
// Define variables and initialize with empty values
$songname = $artist = $message = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
   // Get username & password
       $songname = trim($_POST["songname"]);
       $artist = trim($_POST["artist"]);  
       
   // Prepare an insert statement
   $sql = "INSERT INTO music (songname, artist) VALUES (?, ?)";
       
       // Use DB info in $link from config.php to construct MySQL message/command
       if($stmt = mysqli_prepare($link, $sql)){
 
           // Bind variables to the prepared statement as parameters
           mysqli_stmt_bind_param($stmt, "ss", $param_songname, $param_artist);
           
           // Set parameters
           $param_songname = $songname;
           $param_artist = $artist;
           
           // Attempt to EXECUTE the prepared statement
           mysqli_stmt_execute($stmt);            
 
           // Close statement
           mysqli_stmt_close($stmt);
           $message = "Congratulations! You Have Successfully Added Song!";
 
       } else {
                $message = "Problems with inserting to Database";            
       }
 
   // Close connection
   mysqli_close($link);
}
?>
 
<html>
<head>
   <title>Registration</title>
</head>
<body>
 
<?php echo $message; ?>
 
</body>
</html>