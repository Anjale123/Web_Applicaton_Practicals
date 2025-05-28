<?php 
session_start();
function Authentication($connect,$uname,$pwd){
	try {
		$sql = "select username, password from login where username='$uname' and password='$pwd'";
		$result = mysqli_query($connect,$sql);	
		if ($result) {
			$resultCount = mysqli_num_rows($result);
			if ($resultCount == 1) {
				//The authentication successed
				$_SESSION['username']=$uname;
				header('location:profile.php');
			}
			else{
				echo "Please check your username and paswword";
			}
		}
	} catch (Exception $e) {
		$arr = null;
		die($e->getMessage());
	}
}


?>