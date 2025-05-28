<?php
	$n = [4, 5, 96, 7, 82, 6];
	$largest = $n[1];//5
	$s_large = $n[0];//4

	foreach ($n as $num){
		if ($num > $largest){
			$s_large = $largest;
			$largest = $num;
		}

		if ($num > $s_large && $num < $largest){
			$s_large = $num;
		}
	}

	echo "$s_large";
?>