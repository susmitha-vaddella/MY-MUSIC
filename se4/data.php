<?php

function get_artist($songname, $artist)
{
        /* Database INFO */
	$servername = "localhost";
	$username = "vaddells1";
	$password = "0j41c4";
	$dbname = "vaddells1_db";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
       }

       $sql = "SELECT artist FROM music WHERE songname = '$songname'";
       $result = $conn->query($sql);

        if ($result->num_rows > 0) {
             // output data of each row
             while($row = $result->fetch_assoc()) {
                      $p = $row["artist"];
      }
    } else {
                     $p = null;
        }

    $conn->close();

if ($p == $artist) 
  {
    return "true";
  }
else 
 {
  return "false";

 }

}

?>
