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


include('bttm.php');

?>
		</div>
	</div>

	<div id="dv_foot">
		<p>Foot</p>
	</div>

</body>
</html>