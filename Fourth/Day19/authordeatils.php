<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Author Details</title>
</head>
<body>
<?php
require_once 'conf/dbconf.php';
require_once 'fun/myfunc.php';
if (isset($_GET['aid']) && $_GET['aid'] != '') {
	GetByID($_GET['aid'],$connect,['name','birth_year','death_year'],"authors","author_id");
}

?>
</body>
</html>