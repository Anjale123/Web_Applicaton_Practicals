<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<?php

	echo "<h1>Hello world</h1>";
	$i = 10;
	echo $i."<br>";
	$j = 10.3;
	echo $j."<br>";
	echo var_dump($j)."<br>";

	$k = 10003223232;
	echo $k."<br>";
	echo var_dump($k)."<br>";

	//define a variable
	$l = "10.3";
	echo $l."<br>";
	/*
	var_dump show the data type of the given variable
	*/
	echo var_dump($l)."<br>";
	#check

	$m = 'A';
	echo $m."<br>";
	echo var_dump($m)."<br>";

	$n = true;
	echo $n."<br>";
	echo var_dump($n)."<br>";

	$o = 14E6;
	echo "$o<br>";
	echo var_dump($o)."<br>";
	?>
</body>
</html>

