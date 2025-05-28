<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>List of books</title>
</head>
<body>
<?php
require_once 'conf/dbconf.php';
require_once 'fun/myfunc.php';
PrintTableCols('books',$connect,['title','genre','published_year','author_id']);
?>
</body>
</html>