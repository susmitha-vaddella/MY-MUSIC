<?php

function get_artist($name)
{
	$products = [
		"ShapeOfYou" => "Ed Sheeran",
		"Faded" =>"AlanWalker",
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
