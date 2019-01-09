<?php
include ('db/dbconn.php');
include('auth.php');

echo "<h1>Book List</h1>";
$query_book_list = "SELECT * FROM `bookInfo`";
$result = mysqli_query($dbconn, $query_book_list) or die(mysql_error());
if ($result->num_rows > 0) {
	while($row = $result->fetch_assoc()) {
		//echo "Book Name: "		. $row["book_name"]."<br>". 
		$bname = $row["book_name"];
		echo 
		"Book Name: "	. "<a href='book_indivisual.php?bname=$bname'>". $row["book_name"] ."</a><br>".
		"Author : "		. $row["book_auth"]."<br>".
		"Publisher : "	. $row["book_pub"]."<br>".
		"Price : " 		. $row["book_price"]."<br>".
		"<hr/>";
	}
}


echo "	<p>
		<a href='book_category.php'>Book Categories</a><br/>
		<a href='dash.php'>Dashboard</a><br/>
		<a href='logout.php'>Logout</a><br/>
		</p>";

?>