<?php
	$str = file_get_contents("roof.json");
	$json = json_decode($str);

	$num = count($json->{"material"});
	$num1 = $num - 1;
//	echo $num;
//	echo $num1;
	$i;
	$str = "{\"material\":[";
//	$str = "<select id=\"material_list_wall1\">";
	for($i=0;$i<$num;$i++)
	{
		$hello =  $json->{"material"}[$i]->{"name"};

		if($i < $num1)
			$str = $str."{\"name\":\"".$hello."\"},";
		else
			$str = $str."{\"name\":\"".$hello."\"}";
		
//		$str = $str."<option value=".$hello."\">".$hello."</option>";
	/*	echo "<br>";
		echo $json->{"material"}[$i]->{"id"};
		echo "<br>";
		echo $json->{"material"}[$i]->{"value"};
		echo "<br>";*/
	}
	$str = $str."]}";
	echo $str;

/*
	var_dump($json->{"material"});
	echo "<br>";
	echo count($json->{"material"});*/
?>
