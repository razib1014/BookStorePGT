<?php include 'db/dbconn.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title>Online Book Store</title>
	<link rel="stylesheet" href="css/site_style_m.css">
</head>
<body>

	<div id="dv_head">
		<p id='site_title'>Online Book Store</p>
	</div>



	<div id="dv_body">
		<div id="bd_area">
			<h1 style="text-align: center;">Login form</h1>
			<div id="dv_log_reg">
				<table id="log_reg_table">
					<form method="POST" action="user_login.php">

						<tr>
							<td>User Name : </td>
							<td><input type="txt" name="uname"></td>
						</tr>
						<tr>
							<td>Password : </td>
							<td><input type="password" name="passwd"></td>
						</tr>
						<tr>
							<td colspan="2" style="text-align: center;"><input type="submit" name="login" value="Login"></td>
						</tr>


					</form>

				</table>

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
							echo "<br><b><i>Username / password is incorrect.<br>Please re-enter your username and password carefully.</i></b><br/>";
						}
					}

					?>


				<a href="../index.php">Home</a><br>
				<a href="user_registration.php">Registration</a>

			</div>
		</div>
	</div>

	<div id="dv_foot">
		<p>Foot</p>
	</div>
</body>
</html>