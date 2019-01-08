<?php include 'db/dbconn.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>
	<h1>Login from</h1>
	<div id="login">
		<form method="POST" action="user_login.php">
			User Name : <input type="txt" name="uname"><br>
			Password : <input type="password" name="passwd"><br>
			<input type="submit" name="login" value="Login">
		</form>
	</div>

	<a href="../index.php">Home</a><br>
	<a href="user_registration.php">Registration</a>

	<?php
	session_start();
	if(isset($_POST['login'])){
		$uname = $_POST['uname'];
		$passwd = $_POST['passwd'];

		$query_usrlgin = "SELECT uname, passwd FROM `userInfo` WHERE uname='$uname' and passwd='$passwd'";

		$qere= mysqli_query($dbconn, $query_usrlgin) or die(mysql_error());
		$rows = mysqli_num_rows($qere);
		if($rows==1){
			$_SESSION['uname'] = $uname;
			header("Location:dash.php");
		}else{
			echo "Username / password is incorrect.";
		}

	}

	?>
	</body>
	</html>