<?php

function get_artist($name)
{
	$products = [
		"ShapeOfYou" => "EdSheeran",
		"Faded" =>"AlanWalker",
		"SeeYouAgain" =>"WizKhalifa"		
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
