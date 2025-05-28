<?php 

function GetData($connect,$query){
	$arr = array();
	try {
		$sql = $query;
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

function GetBookCoverPrice($connect)
{
	$sql ="select Book_name,image_name,price from books";
	return GetData($connect,$sql);
}
function GetBookTypes($connect)
{
	$sql ="select * from booktype";
	return GetData($connect,$sql);
}

function FilterBooksByTypes($connect,$tids)
{
	$sql ="select * from books where ";
	foreach ($tids as $key => $tid) {
		if ($key == 0) {
			$sql.= "Book_type_id = '$tid'";
		}else{
			$sql.= " or Book_type_id = '$tid'";
		}
	}
	return GetData($connect,$sql);
}


?>