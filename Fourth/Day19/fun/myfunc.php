<?php 

function fetchData($connect,$sql,$colname,$keyid,$filename){
	$result = mysqli_query($connect,$sql);
		//check if data exists in the table
		if (mysqli_num_rows($result)>0) {
			// fetch the data from rows
			echo "<table border='1'>";
			$col = mysqli_fetch_fields($result);
			//print the colums
			echo "<tr>";
			foreach ($col as $value) {
				if($value->name != $keyid){
				echo "<td>$value->name</td>";
				}
			}
			echo "<td>$colname</td>";
			echo "</tr>";
			
			while ($row = mysqli_fetch_assoc($result)) {
				//print the data in a table format
				echo "<tr>";
				foreach ($row as $key => $value) {
					if($key == $keyid){
						echo "<td><a href='$filename?aid=$value'>$colname</a></td>";
					}
					else{
						echo "<td>$value</td>";
					}
				}
				
				echo "</tr>";
			}
			echo "</table>";
		} else {
			echo "No results";
		}
}
function fetchDataSimple($connect,$sql){
	$result = mysqli_query($connect,$sql);
		//check if data exists in the table
		if (mysqli_num_rows($result)>0) {
			// fetch the data from rows
			echo "<table border='1'>";
			$col = mysqli_fetch_fields($result);

			//print the colums
			echo "<tr>";
			foreach ($col as $value) {
				//return an object
				//print_r($value);
				echo "<td>$value->name</td>";
			}
			echo "</tr>";
			while ($row = mysqli_fetch_assoc($result)) {
				//print the data in a table format
				echo "<tr>";
				foreach ($row as $key => $value) {
					echo "<td>$value</td>";
				}
				
				echo "</tr>";
			}
			echo "</table>";
		} else {
			echo "No results";
		}
}
function PrintTable($tableName,$connect)
{
	try {
		$sql = "SELECT * FROM $tableName";
		fetchDataSimple($connect,$sql);	
	} catch (Exception $e) {
		die($e->getMessage());
	}
}

function PrintTableCols($tableName,$connect,$colnames)
{
	try {

		//Query
		$sql = "SELECT ";
		for ($i=0; $i < sizeof($colnames)-1; $i++) { 
			$sql .=$colnames[$i].",";
		}
		$sql .=$colnames[sizeof($colnames)-1]." from $tableName as b 
inner join book_authors as ba on b.book_id = ba.book_id";
		fetchData($connect,$sql,"Author","author_id","authordeatils.php");
		
		
	} catch (Exception $e) {
		die($e->getMessage());
	}
}

//wrtie a function to search the books by name
function SearchBooks($name,$connect,$colnames)
{
	try {

		$sql = "SELECT ";
		for ($i=0; $i < sizeof($colnames)-1; $i++) { 
			$sql .=$colnames[$i].",";
		}
		$sql .=$colnames[sizeof($colnames)-1]." from books as b 
inner join book_authors as ba on b.book_id = ba.book_id where title like '%$name%'";
		//echo $sql;
		fetchData($connect,$sql,"Author","author_id","authordeatils.php");
		
	} catch (Exception $e) {
		die($e->getMessage());
	}
}

function GetByID($id,$connect,$colnames,$tableName,$keyid)
{
	try {

		$sql = "SELECT ";
		for ($i=0; $i < sizeof($colnames)-1; $i++) { 
			$sql .=$colnames[$i].",";
		}
		$sql .=$colnames[sizeof($colnames)-1]." from $tableName where $keyid = $id";
		//echo $sql;
		fetchDataSimple($connect,$sql);
		
	} catch (Exception $e) {
		die($e->getMessage());
	}
}

//Avoid the repeating codes in your functions
function GetUsers($tableName,$connect,$colnames)
{
	try {

		//Query
		$sql = "SELECT ";
		for ($i=0; $i < sizeof($colnames)-1; $i++) { 
			$sql .=$colnames[$i].",";
		}
		$sql .=$colnames[sizeof($colnames)-1]." from $tableName";
		fetchData($connect,$sql,"Borrowed","user_id","borrowedbooks.php");
		
		
	} catch (Exception $e) {
		die($e->getMessage());
	}
}
function GetBorrowedBooks($id,$connect,$colnames)
{
	try {

		$sql = "SELECT ";
		for ($i=0; $i < sizeof($colnames)-1; $i++) { 
			$sql .=$colnames[$i].",";
		}
		$sql .=$colnames[sizeof($colnames)-1]." from books as b 
	inner join borrow as bo on b.book_id = bo.book_id 
	inner join book_authors as ba on b.book_id = ba.book_id
	where bo.user_id=$id";
		//echo $sql;
		fetchData($connect,$sql,"Author","author_id","authordeatils.php");
		
	} catch (Exception $e) {
		die($e->getMessage());
	}
}

function GetUserName($id,$connect)
{
	$sql ="select * from users where user_id = $id";
	$result = mysqli_query($connect,$sql);
	//get the results in array
	//$arr = mysqli_fetch_array($result);
	//get the results in asociate array
	$arr = mysqli_fetch_assoc($result);
	return $arr;
}
?>