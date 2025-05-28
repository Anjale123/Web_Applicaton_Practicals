<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Borrowed Book Details</title>
</head>
<body>
<?php
require_once 'conf/dbconf.php';
require_once 'fun/myfunc.php';

if (isset($_GET['aid']) && $_GET['aid'] != '') {
	$user=GetUserName($_GET['aid'],$connect);
	//print_r($user);
	echo $user['name']." borrowed follwing books.";
	echo "<hr>";
	GetBorrowedBooks($_GET['aid'],$connect,['title','genre','published_year',"author_id"]);
}

?>
</body>
</html>