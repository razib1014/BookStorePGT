<?php 
include ('db/dbconn.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>User Registration</title>
</head>
<body>
	<h1>Registration from</h1>
	<form method="POST" action="user_registration.php" enctype="multipart/form-data">
		<div>
			Name : <input type="txt" name="name"><br>
			User Name : <input type="txt" name="usrname"><br>
			Email : <input type="txt" name="email"><br>
			Password : <input type="password" name="passwd"><br>
			Re-type password : <input type="password" name="repasswd"><br>
			User Image : <input type="file" name="image"><br>
			<input type="submit" name="ureg" value="Submit">

		</div>
		
	</form>

	<a href="../index.php">Home</a><br>
	<a href="user_login.php">Login</a><br>

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
			echo "Please type a valid email address.";
		}
		else{

			///////////////////////////////////////////////////////////////////////


			//////////////////////////////////////////////////////////////////////

				if ($_POST["passwd"] === $_POST["repasswd"]){

					$query_usrreg = "INSERT INTO userInfo (id, name, uname, email, passwd, image, date) VALUES ('NULL', '$name', '$uname', '$email', '$passwd', '$image', CURRENT_TIMESTAMP);";

					if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
						echo "Registration Success";
					}
					else{
						echo "Failed to register";
					}

					if(mysqli_query($dbconn, $query_usrreg)){
						echo "Data inserted";
					}
					else{
						echo "Error : ". $query_usrreg . "<br>". mysqli_error($dbconn);
					}
					header("Location:../index.php");

				}
				else{
					echo "Password not matched";
				}
			}
		}


		?>
	</body>
	</html>