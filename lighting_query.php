<?php
	$typee = $_GET["type"];
	if($typee == "lighting_type_building")
	{
		$str = file_get_contents("lighting_building.json");
	}
	else if($typee == "lighting_type_space")
	{
		$str = file_get_contents("lighting_space.json");
	}
	$tag1 = $_GET["tag"];
	$json = json_decode($str, true);
	echo $json["types"][$tag1]["value"];
?>
