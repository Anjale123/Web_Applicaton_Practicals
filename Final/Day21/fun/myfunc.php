<?php 
function GetBookCoverPrice($connect)
{
	$arr = array();
	try {
		$sql ="select Book_name,image_name,price from books";
		$result = mysqli_query($connect,$sql);	
		while ($row = mysqli_fetch_assoc($result)) {
			array_push($arr,$row);
		}
	} catch (Exception $e) {
		$arr = null;
		die($e->getMessage());
	}
	return $arr;
}
?>