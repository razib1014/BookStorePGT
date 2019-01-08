<?php
include ('db/dbconn.php');
include('auth.php');

echo "<h1>Book List</h1>";
$query_book_list = "SELECT * FROM `bookInfo`";
$result = mysqli_query($dbconn, $query_book_list) or die(mysql_error());
if ($result->num_rows > 0) {
	while($row = $result->fetch_assoc()) {
		echo "Book Name: "		. $row["book_name"]."<br>". 
		"Author : "		. $row["book_auth"]."<br>".
		"Publisher : "		. $row["book_pub"]."<br>".
		"Price : " 		. $row["book_price"]."<br>".
		"<hr/>";
	}
}

echo "<a href='dash.php'>Dashboard</a><br/>";
echo "<a href='logout.php'>Logout</a><br/>";

?>