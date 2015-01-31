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
	$a = array();
//	$str = file_get_contents("lighting_space.json");
//	echo $str;
	$str1 = "{\"type\":[";
	$json = json_decode($str);
	foreach($json as $key => $value)
	{
	//	echo $key;
		foreach($value as $key1 => $value1)
		{
			array_push($a,$key1);
		}
	}
//	print_r($a);
	$num = count($a);
	$num1 = $num - 1;
	for($i=0;$i<$num;$i++)
	{
		if($i < $num1)
			$str1 = $str1."{\"name\":\"".$a[$i]."\"},";
		else
			$str1 = $str1."{\"name\":\"".$a[$i]."\"}";
		
	}

	$str1 = $str1."]}";
	echo $str1;
	





/*	
	$num = count($json->{"type"});
	$num1 = $num - 1;
	$i;
	$str = "{\"type\":[";
	for($i=0;$i<$num;$i++)
	{
		$hello =  $json->{"type"}[$i]->{"name"};

		if($i < $num1)
			$str = $str."{\"name\":\"".$hello."\"},";
		else
			$str = $str."{\"name\":\"".$hello."\"}";
		
	}
	$str = $str."]}";
	echo $str;
*/
/*
	var_dump($json->{"material"});
	echo "<br>";
	echo count($json->{"material"});*/
?>
