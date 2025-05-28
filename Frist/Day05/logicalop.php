<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Logical operations</title>
</head>
<body>
<?php 
	$a=true; $b=false;
	echo var_export($a,true)." && ".var_export($b,true)."=".var_export($a && $b,true)."<br>";
	echo var_export($a,true)." || ".var_export($b,true)."=".var_export($a || $b,true)."<br>";
	echo var_export($a,true)." xor ".var_export($b,true)."=".var_export($a xor $b,true)."<br>";
	echo var_export($a,true)." ! =".var_export(!$a,true)."<br>";

	$i =10; $j=5;
	$result = ($i < $j && $i<10);
	echo var_export($result,true)."<br>";

 ?>
</body>
</html>
