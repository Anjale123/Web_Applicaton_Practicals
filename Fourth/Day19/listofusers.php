<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>List of Users</title>
</head>
<body>
<?php
require_once 'conf/dbconf.php';
require_once 'fun/myfunc.php';
GetUsers('users',$connect,['name','email','phone','user_id']);
?>
</body>
</html>