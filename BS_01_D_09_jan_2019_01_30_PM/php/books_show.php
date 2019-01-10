<?php 
include ('db/dbconn.php');
include('auth.php');

$bname = $_GET['cat'];

$quary_bookInfo = "SELECT * FROM `bookInfo` WHERE book_cat= '$bname'";
$result = mysqli_query($dbconn, $quary_bookInfo) or die(mysql_error());
if ($result->num_rows > 0) {
	while($row = $result->fetch_assoc()) {
		echo 	
		"Book Name: "		. $row["book_name"]."<br>". 
		"Author : "			. $row["book_auth"]."<br>".
		"Publisher : "		. $row["book_pub"]."<br>".
		"Category : "		. $row["book_cat"]."<br>".
		"<hr/>";
	}
}

echo "	<p>
		<a href='book_category.php'>Book Categories</a><br/>
		<a href='books.php'>Book List</a><br/>
		<a href='dash.php'>Dashboard</a><br/>
		<a href='logout.php'>Logout</a><br/>
		</p>";
?>