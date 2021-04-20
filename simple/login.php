<?php
 
require_once "config.php";
 
$songname = $artist = $message = "";
 
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
       $songname = trim($_POST["songname"]);
       $artist = trim($_POST["artist"]);
  
       $sql = "SELECT songname, artist FROM music WHERE songname = ?";
       
       if($stmt = mysqli_prepare($link, $sql)){
           mysqli_stmt_bind_param($stmt, "s", $param_songname);
        
           $param_songname = $songname;
           
            if(mysqli_stmt_execute($stmt)){
                 mysqli_stmt_store_result($stmt);
               
               if(mysqli_stmt_num_rows($stmt) == 1){                    
                   
                   mysqli_stmt_bind_result($stmt, $songname, $h_artist);
			if(mysqli_stmt_fetch($stmt)){
                             if($artist == $h_artist){
			 $message = "The song already exists!!";
 
                       } else{
			$message = "wrong artist name.";
                       }
                   }
		} else{
                   // Display an error message if username doesn't exist
                   $message = "No artist found with that Song";
               }          
           }
			
           // Close statement
           mysqli_stmt_close($stmt);
       }
   
   // Close connection
   mysqli_close($link);
}
?>
 
<html>
<head>
   <title>Login</title>
</head>
<body>
 
<?php echo $message; ?>
 
</body>
</html>
