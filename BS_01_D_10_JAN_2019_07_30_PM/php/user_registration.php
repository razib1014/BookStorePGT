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
			<h1 style="text-align: center;">Registration form</h1>
			<div id="dv_log_reg">

				<table id="log_reg_table">
					<form method="POST" action="user_registration.php" enctype="multipart/form-data">
					<tr>
						<td>Name : </td>
						<td><input type="txt" name="name"></td>
					</tr>
					<tr>
						<td>User Name : </td>
						<td><input type="txt" name="usrname"></td>
					</tr>
					<tr>
						<td>Email : </td>
						<td><input type="txt" name="email"></td>
					</tr>
					<tr>
						<td>Password : </td>
						<td><input type="password" name="passwd"></td>
					</tr>
					<tr>
						<td>Re-type password : </td>
						<td><input type="password" name="repasswd"></td>
					</tr>
					<tr>
						<td>User Image : </td>
						<td><input type="file" name="image"></td>
					</tr>
					<tr>
						<td colspan="2" style="text-align: center;"><input type="submit" name="ureg" value="Submit"></td>
					</tr>
					</form>


				</table>

				<?php  
	if(isset($_POST['ureg'])){
		$name = $_POST['name'];
		$uname = $_POST['usrname'];
		$email = $_POST['email'];
		$passwd = $_POST['passwd'];
		$image = $_FILES['image']['name'];

		$target = "img/users/".basename($image);

		$valid_email = filter_var($email, FILTER_SANITIZE_EMAIL);
		if( !filter_var($valid_email, FILTER_VALIDATE_EMAIL)) {
			echo "<br><b><i>Please type a valid email address.</b></i><br/>";
		}
		else{

			///////////////////////////////////////////////////////////////////////


			//////////////////////////////////////////////////////////////////////

				if ($_POST["passwd"] === $_POST["repasswd"]){

					$query_usrreg = "INSERT INTO userInfo (id, name, uname, email, passwd, image, date) VALUES ('NULL', '$name', '$uname', '$email', '$passwd', '$image', CURRENT_TIMESTAMP);";

					if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
						echo "<br><b><i>Registration Success<br/></b></i>";
					}
					else{
						echo "<br><b><i>Failed to register<br/></b></i>";
					}

					if(mysqli_query($dbconn, $query_usrreg)){
						echo "<br><b><i>Data inserted</b></i><br/>";
					}
					else{
						echo "Error : ". $query_usrreg . "<br>". mysqli_error($dbconn);
					}
					header("Location:../index.php");

				}
				else{
					echo "<br><b><i>Password not matched</b></i><br/>";
				}
			}
		}


		?>

		<a href="../index.php">Home</a><br>
	<a href="user_login.php">Login</a><br>

			</div>


		</div>
	</div>

	<div id="dv_foot">
		<p>Foot</p>
	</div>

	</body>
	</html>