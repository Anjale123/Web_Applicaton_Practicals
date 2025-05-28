<?php 
function PrintTable($tableName,$connect)
{

	try {

	//Query
		$sql = "SELECT * FROM $tableName";

	//excute the quey
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
		
	} catch (Exception $e) {
		die($e->getMessage());
	}
}

function fetchData($connect,$sql){
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
			echo "<td>Author</td>";
			echo "</tr>";
			
			while ($row = mysqli_fetch_assoc($result)) {
				//print the data in a table format
				echo "<tr>";
				foreach ($row as $key => $value) {
					echo "<td>$value</td>";
					if($key == "author_id"){
						echo "<td><a href='authordeatils.php?aid=$value'>Author</a></td>";
					}
				}
				
				echo "</tr>";
			}
			echo "</table>";
		} else {
			echo "No results";
		}
}
function PrintTableCols($tableName,$connect,$colnames)
{
	try {

		//Query
		$sql = "SELECT ";
		for ($i=0; $i < sizeof($colnames)-1; $i++) { 
			$sql .=$colnames[$i].",";
			//echo $sql;
		}
		$sql .=$colnames[sizeof($colnames)-1]." from $tableName as b 
inner join book_authors as ba on b.book_id = ba.book_id";
		//echo $sql;
		//excute the quey
		fetchData($connect,$sql);
		
		
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
		fetchData($connect,$sql);
		
	} catch (Exception $e) {
		die($e->getMessage());
	}
}

function GetAuthor($id,$connect,$colnames)
{
	try {

		$sql = "SELECT ";
		for ($i=0; $i < sizeof($colnames)-1; $i++) { 
			$sql .=$colnames[$i].",";
		}
		$sql .=$colnames[sizeof($colnames)-1]." from authors where author_id = $id";
		//echo $sql;
		fetchData($connect,$sql);
		
	} catch (Exception $e) {
		die($e->getMessage());
	}
}


?>