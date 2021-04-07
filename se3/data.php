<?php

function get_artist($songname)
{
        /* Database INFO */
	$servername = "us-cdbr-east-03.cleardb.com";
	$username = "b0ede556e62e4b";
	$password = "170d8cad";
	$dbname = "heroku_fd6d25c0e48f745";

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
                      $artist = $row["artist"];
      }
    } else {
                     $artist = null;
        }

    $conn->close();

    return $artist;
}

?>
