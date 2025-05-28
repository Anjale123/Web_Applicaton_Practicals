<?php

if (isset($_GET['id'])) {
	$bookId = $_GET['id'];
	require_once('conf.php');
	$query = "select b.*, p.name from book  b left join publisher p on p.publisher_id = b.publisher_id where book_id =".$bookId;
	$query2 = "select a.first_name,a. last_name from author a inner join book_authors ab on ab.author_id = a.author_id where ab.book_id =".$bookId;
	$result = mysqli_query($conn,$query);
	$result2 = mysqli_query($conn,$query2);
	if (mysqli_num_rows($result) > 0) {
		echo "<table border=1 cellspacing=0>";
		while ($row = mysqli_fetch_assoc($result)) {	
			foreach ($row as $key => $value) {
				echo "<tr>";
				echo "<td>$key</td>";
				echo "<td>$value</td>";
				echo "</tr>";
			}
		}
		echo "<tr><td colspan='2' align='center'><b>Authors</b></td></tr>";
		while ($row = mysqli_fetch_assoc($result2)) {	
			foreach ($row as $key => $value) {
				echo "<tr>";
				echo "<td>$key</td>";
				echo "<td>$value</td>";
				echo "</tr>";
			}
		}

		echo "</table>";
	} else {
		echo "<h3>404 Nothing Found</h3>";
	}
	

} else {
	echo "<h3>404 Nothing Found</h3>";
}

/*
select b.*, p.name from book  b left join publisher p 
on p.publisher_id = b.publisher_id


where b.book_id = 12;

inner join book_authors ab
on ab.book_id = b.book_id

select a.* from author a inner join book_authors ab on ab.author_id = a.author_id where ab.book_id = 25;

*/



?>
