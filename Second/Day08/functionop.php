<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Functions</title>
</head>
<body>
<?php 
 function PrintMsg()
 {
 	echo "Hello PhP<br>";
 }

 PrintMsg();

 function MyNumber(){
 	return 10;
 }
 echo MyNumber();
 echo "<br>";
 function Sum($a,$b){
 	echo "Sum is ".$a+$b."<br>";
 }
Sum(5,1);

function Sub($a=5,$b=2){
 	echo "Subtraction is ".$a-$b."<br>";
 }
Sub();
Sub(5,1);
Sub(6);

$counter = 1;

function IncreCounter(){
	global $counter;
	return $counter++;
}

echo IncreCounter()."<br>";
echo IncreCounter()."<br>";
echo IncreCounter()."<br>";


$multiplication = function($a,$b){
	return $a * $b;
};

echo $multiplication(4,2)."<br>";

$add = function($a,$b){ return $a+$b;};
$sub = function($a,$b){ return $a-$b;};
$mul = function($a,$b){ return $a*$b;};

function MathOp($operation,$num1,$num2){
	echo $operation($num1,$num2)."<br>";
}

MathOp($add,10,3);

//recursive function print 1 - 10

function PrintNum($n){

	if ($n<1) {
		return 0;
	}
	else{
		echo $n.",";
		return PrintNum($n-1);
	}	
}

$j = 0;
function RevPrintNum($n){
	if ($n<1) {
		return 0;
	}
	RevPrintNum($n-1);
	echo $n.",";
	return $n;
}

PrintNum(10);
echo "<br>";
RevPrintNum(10);

//print an array using a recursive function

$arr = [1,8,8,18,1,7,81,9,6,3];

function PrintArr($arr,$n){
	if ($n>sizeof($arr)-1) {
		return 0;
	}
	echo $arr[$n].",";
	return PrintArr($arr,$n+1);
}
echo "<br>";
PrintArr($arr,0);

// print multi dimensional array [[1,4,5],4,6,[7,2],[[1,5],6]]
$darr=[[1,4,5],4,6,[7,2],[[1,5],6]];
function PrintMulr($arr){
	foreach ($arr as $item) {
		if (is_array($item)) {
			PrintMulr($item);
		}else{
			echo $item.",";
		}
	}
}
echo "<br>";
PrintMulr($darr);



?>
</body>
</html>