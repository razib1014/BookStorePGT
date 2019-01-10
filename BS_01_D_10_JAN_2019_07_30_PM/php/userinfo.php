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


			<?php
			include ('db/dbconn.php');
			include('auth.php');
			$uname = $_SESSION["uname"];
			$query_usrinfo = "SELECT * FROM `userInfo` WHERE uname='$uname'";
			$result = mysqli_query($dbconn, $query_usrinfo) or die(mysql_error());
			if ($result->num_rows > 0) {
				while($row = $result->fetch_assoc()) {
					/*echo "
					<table id='tab_user_info'>
						<tr>
							<td>
								<img src='img/users/".$row["image"]."'
							</td>
							<td>
								Name: " 		. $row["name"]."<br>". 
								"User Name: " 	. $row["uname"]."<br>".
								"Email : "		. $row["email"]."<br>"."
							</td>
						</tr>
					</table>";
				}*/
				
				echo "
				<table id='tab_user_info'>".
					"<tr id='tab_usri_row'>".
						"<td id='tab_usri_col' rowspan='3'>".
							"<img id='usr_img' src='img/users/".
							$row["image"]."'>".
							
						"</td>".

						"<td id='tab_usri_col'>Name : </td>".
						"<td id='tab_usri_col'>".$row["name"]."</td>".
					"</tr>".
					
					"<tr id='tab_usri_row'>".
						"<td id='tab_usri_col'>Username :</td>
						<td id='tab_usri_col'>". $row["uname"]."</td>
					</tr>

					<tr id='tab_usri_row'>
						<td id='tab_usri_col'>Email :</td>
						<td id='tab_usri_col'>". $row["email"]."</td>
					</tr>
				</table>";
				}
			}

			include('bttm.php');

			?>

		</div>
	</div>

	<div id="dv_foot">
		<p>Foot</p>
	</div>

</body>
</html>