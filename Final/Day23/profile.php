<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Profile</title>
</head>
<body>
	<?php
		session_start();
		if (isset($_SESSION['username'])) {
	?>		
		
	<h1>Profile Page</h1>
	<h2>Hello user <?php echo $_SESSION['username']; ?></h2>
	<a href="logout.php">Logout</a>
	<?php
		} else {
			header('location:index.php');
		}
	?>
</body>
</html>