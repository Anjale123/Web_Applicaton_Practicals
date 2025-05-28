<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Loops</title>
</head>
<body>
	<?php
		$i = 0;
		while ($i <=10) {
			echo "$i <br>";
			$i++;
		}

		for ($i=11; $i < 21; $i++) { 
			echo "$i <br>";
		}

		$j=6;
		do {
			echo "$j <br>";
			$j++;
		} while ($j<5);

		$letters = ['a','d','f','r','t','p'];

		foreach ($letters as $letter) {
			echo "$letter <br>";
		}

		// [4,52,96,7,8,6] find second largest number
		// [7,5,6,5,7,5,2] find most duplicated number
		// [7 5 6 2]

	?>
</body>
</html>