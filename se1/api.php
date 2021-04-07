<?php
header("Content-Type:application");
require "data.php";

if(!empty($_GET['name']))
{
	$name=$_GET['name'];
		$artist = get_artist($name);
	
	if(empty($artist))
	{
		response(NULL);
	}
	else
	{
		response($artist);
	}	
}
else
{
	response(NULL);
}

function response($data)
{
	header("HTTP/1.1 ");
	
	echo $data;
}

?>

