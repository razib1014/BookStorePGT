<?php 
include ('db/dbconn.php');
include('auth.php');

$bname = $_GET['cat'];

$quary_bookInfo = "SELECT * FROM `bookInfo` WHERE book_cat= '$bname'";
$result = mysqli_query($dbconn, $quary_bookInfo) or die(mysql_error());
if ($result->num_rows > 0) {
	while($row = $result->fetch_assoc()) {
		$BIname=$row["book_name"];
		echo 	
		"Book Name: "		. "<a href='book_indivisual.php?bname=$BIname'>".$row["book_name"]."</a><br>". 
		"Author : "			. $row["book_auth"]."<br>".
		"Publisher : "		. $row["book_pub"]."<br>".
		"Category : "		. $row["book_cat"]."<br>".
		"<hr/>";
	}
}

include('bttm.php');
?>