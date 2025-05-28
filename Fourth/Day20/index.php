<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>UoV Library</title>
</head>
<body>

	<form method="GET" action="<?php echo $_SERVER['PHP_SELF']; ?>">
		<label>Enter the book title :</label>
		<input type="text" name="title">
		<input type="submit" value="search">
	</form>

</body>
</html>
<?php

require_once('conf.php');

if (isset($_GET['title'])) {
	
	$query = "select book_id,  title from  book where title like '%".$_GET['title']."%'";
	$result = mysqli_query($conn,$query);
	//print_r($result);
	if (mysqli_num_rows($result) > 0) {
		echo "<table border=1 cellspacing=0>";
		echo "<tr>
				<th>ID</th>
				<th>Title</th>
				<th>Details</th>
			</tr>";
		
		while ($row = mysqli_fetch_assoc($result)) {
			echo "<tr>";
				$bid = $row['book_id'];
				$name = $row['title'];
				echo "<td>".$bid."</td>";
				echo "<td>".$name."</td>";
				echo "<td><a href='./book.php?id=$bid'>Details</a></td>";
			echo "</tr>";
		}
		echo "</table>";
	} else {
		echo "<h4>Nothing found</h4> <br>";
	}
}
	
?>