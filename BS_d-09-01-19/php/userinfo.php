<?php
include ('db/dbconn.php');
include('auth.php');
$uname = $_SESSION["uname"];
$query_usrinfo = "SELECT * FROM `userInfo` WHERE uname='$uname'";
$result = mysqli_query($dbconn, $query_usrinfo) or die(mysql_error());
if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {
			echo "Name: " 		. $row["name"]."<br>". 
				 "User Name: " 	. $row["uname"]."<br>".
				 "Email : "		. $row["email"]."<br>".
				 "Profile Pic: ". "<img src='img/users/".$row["image"]."' ><br>";
				}
			}

			echo "<a href='dash.php'>Dashboard</a><br/>";
			echo "<a href='logout.php'>Logout</a><br/>";
?>