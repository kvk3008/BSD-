<?php

//	var_dump( json_decode($_GET['query'],true));
//	echo '<br>';


//	$query = '{"0":3,"1":"'+'ClimateZoneFirst'+'","2":"'+'NonResidential'+'","3":"WWR"}';
//	echo $query;
//	$obj = json_decode($query);
	
	

	$obj = json_decode($_GET['query']);  // uncommnt
	$i = 0;
//	echo $obj->{$i};
	$xml = simplexml_load_file("file.xml");
//	print_r($xml);
	$num = $obj->{0};
	$obj1;
//	echo "yogi";
//	echo $num;// comment
	for($i=1;$i<=$num;$i++)
	{
		$str = $obj->{$i};
//		echo $str.'<br>'; // comment
		$obj1 = $xml->$str;
		$xml = $obj1;
	}
	echo $xml;
?>
