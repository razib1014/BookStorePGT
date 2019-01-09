<?php
include ('db/dbconn.php');
include('auth.php');
$uname = $_SESSION["uname"];
$query_usrinfo = "SELECT * FROM `userInfo` WHERE uname='$uname'";
$result = mysqli_query($dbconn, $query_usrinfo) or die(mysql_error());
if ($result->num_rows > 0) {
	while($row = $result->fetch_assoc()) {
		echo "
		<table>
			<tr>
			<td><img src='img/users/".$row["image"]."'</td>
			<td>	Name: " 		. $row["name"]."<br>". 
					"User Name: " 	. $row["uname"]."<br>".
					"Email : "		. $row["email"]."<br>"."</td>
			</tr>
		</table>";
	}
}

include('bttm.php');

?>