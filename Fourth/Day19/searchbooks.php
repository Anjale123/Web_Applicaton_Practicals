<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Search Books</title>
</head>
<body>
<?php
//get the db connection file
require_once 'conf/dbconf.php';
require_once 'fun/myfunc.php';
//PrintTable("books",$connect);
//echo $_SERVER['PHP_SELF']; //get the file name
?>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="GET">
		<table>
			<tr>
				<td align="right">Book Name:</td>
				<td><input type="text" name="bkname" /></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Search" /></td>
			</tr>
		</table>

<?php
if (isset($_GET['bkname']) && $_GET['bkname'] != '') {
	SearchBooks($_GET['bkname'],$connect,['title','genre','published_year','author_id']);
}
	
?>
</body>
</html>
