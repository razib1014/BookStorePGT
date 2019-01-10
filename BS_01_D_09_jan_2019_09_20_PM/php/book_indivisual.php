<?php 
include ('db/dbconn.php');
include('auth.php');
echo "<h1>Book Information</h1>";
$bname = $_GET['bname'];

$quary_bookInfo = "SELECT * FROM `bookInfo` WHERE book_name= '$bname'";
$result = mysqli_query($dbconn, $quary_bookInfo) or die(mysql_error());
if ($result->num_rows > 0) {
	while($row = $result->fetch_assoc()) {
		echo 	
		"Book Name: "		. $row["book_name"]."<br>". 
		"Author : "			. $row["book_auth"]."<br>".
		"Publisher : "		. $row["book_pub"]."<br>".
		"Category : "		. $row["book_cat"]."<br>".
		"Pages : "			. $row["book_page"]."<br>".
		"Price : " 			. $row["book_price"]."<br>".
		"Stock : " 			. $row["stock_no"]."<br>".
		"<hr/>";
	}
}

include('bttm.php');
?>