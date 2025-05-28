<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login Page</title>
</head>
<?php
require_once 'conf/dbconf.php';
require_once 'fun/myfunc.php';
?>
<body>
	<form method="POST">
	<table>
		<tr>
			<td>Username:</td>
			<td><input type="text" name="uname" /></td>
		</tr>
		<tr>
			<td>Password:</td>
			<td><input type="password" name="pwd" /></td>
		</tr>
		<tr>
			<td colspan="2"><input type="submit" value="Login" /></td>
		</tr>
		<tr>
			<td colspan="2">
				<?php
					if ($_SERVER['REQUEST_METHOD'] == "POST") {
						Authentication($connect,$_POST['uname'],$_POST['pwd']);
					}
				?>
			</td>
		</tr>
	</table>
	</form>
</body>
</html>