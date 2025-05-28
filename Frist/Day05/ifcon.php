<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Condtions</title>
</head>
<body>
<?php 
	$age =20;
	if ($age >=18) {
		echo "You are an adult<br>";
	}

	$marks = 50;
	if ($marks > 34) {
		echo "You passed the exam<br>";
	} else {
		echo "You failed the exam<br>";
	}
	

	//grade the marks
	if ($marks >=75) {
		echo "A<br>";
	} 
	elseif ($marks >=60) {
		echo "B<br>";
	} 
	elseif ($marks >=50) {
		echo "C<br>";
	}
	elseif ($marks >=40) {
		echo "D<br>";
	}
	else {
		echo "E<br>";
	}
	
	//ternary operator
	$result = ($marks > 60) ? "pass" : "fail" ;
	echo "$result<br>";

	//find vowels
	/*switch (variable) {
		case 'value':
			// code...
			break;
		
		default:
			// code...
			break;
	}*/

	//comparison operators

	$a=5;$b='5';
	echo var_export($a == $b,true)."<br>";
	echo var_export($a === $b,true)."<br>";
	echo var_export($a !== $b,true)."<br>";
	//Spaceship operator
	$i=50;$j=50;
	echo $i <=> $j;

 ?>
</body>
</html>