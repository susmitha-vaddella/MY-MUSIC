<?php

function get_artist($name)
{
	$products = [
		"ShapeOfYou" => "Ed Sheeran",
		"Faded" =>"Alan Walker",
		"SeeYouAgain" =>"Wiz Khalifa"		
	];
	
	foreach($products as $product=>$artist)
	{
		if($product==$name)
		{
			return $artist;
			break;
		}
	}
}

?>
