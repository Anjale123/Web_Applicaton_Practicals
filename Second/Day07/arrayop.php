<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Array</title>
</head>
<body>
<?php 
//index array
$fruits = ["Apple","Banana","Cherry"];
print_r($fruits);
echo "<br>";
//Assoicate array
$person = [
	"name"=>"Ellon",
	"age"=>25,
	"city"=>"Newyork"
];
print_r($person);
echo "<br>";
foreach ($person as $key => $value) {
	echo "$key : $value <br>";
}
echo "<hr>";
$students = [
	["name"=>"Alice", "age"=>23, "grade"=>88],
	["name"=>"Bob", "age"=>24, "grade"=>92],
	["name"=>"Charlie", "age"=>23, "grade"=>79]
];
	foreach ($students as $student) {
		foreach ($student as $key => $value) {
			echo "$key : $value <br>";
		}
	}
	echo "<hr>";
	//print all students with grades more than 80
	foreach ($students as $student) {
		if ($student['grade'] > 80) {
			print_r($student);
			echo "<br>";
		}
	}
	//find the average grade
	$sum = 0;
	foreach ($students as $student) {
		$sum += $student['grade'];
	}
	echo "the average grade:".$sum/sizeof($students);

	echo "<hr>";
	//modify array element
	$students[1]["age"]=40;
	print_r($students);

	echo "<hr>";
	$numbers= [4,5,8,1,57,48,52];
	//add an element to the array
	$numbers[]=100;
	print_r($numbers);

	echo "<hr>";
	//remove an element from the array
	unset($numbers[2]);
	print_r($numbers);
	echo "<hr>";
	//check an element exists
	if (in_array(50, $numbers)) {
		echo "Element found <br>";
	} else {
		echo "Element not found <br>";
	}
	echo "<hr>";
	//sort the array
	sort($numbers);
	print_r($numbers);
	echo "<hr>";
	
	$numbers2 = [478,78941,1423];
	//merge 2 arrays
	$new_array = array_merge($numbers,$numbers2);
	print_r($new_array);
	echo "<hr>";

	//reverse the array
	$rev_array = array_reverse($numbers2);
	print_r($rev_array);
	echo "<hr>";

	/*
	$numbers= [4,5,8,1,57,48,52];
	find the maximum gap within the availabe numbers

	*/
	$mynumbers= [4,5,8,1,57,48,52];
	sort($mynumbers);
	echo "the maximum gap is :".$mynumbers[sizeof($mynumbers)-1] - $mynumbers[0];

	/*

	matrix multiplication
		m1 =[[4 5]
			1 2]
		m2 =[[1 2]
			[3 4]
	*/

?>
</body>
</html>