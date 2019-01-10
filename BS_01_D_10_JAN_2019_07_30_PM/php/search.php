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

echo "<h1>Book Search</h1>";

echo "
<div id='dv_search'>
<form method='POST' action='search.php'>
Search Bar : <input type='txt' name='sbar'> &nbsp;
<input type='submit' name='searchB' value='Search'>
</form><br/><br/>
</div>
";



if(isset($_POST['searchB'])){
	$sbar = $_POST['sbar'];

	$search_book = "SELECT * FROM `bookInfo` WHERE (book_name = '$sbar' OR book_auth='$sbar' OR book_pub='$sbar' OR book_cat='$sbar')";
	$result = mysqli_query($dbconn, $search_book) or die(mysql_error());



	if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {
			$BIname=$row["book_name"];
			echo 	
			"Book Name: "		."<a href='book_indivisual.php?bname=$BIname'>". $row["book_name"]."</a><br>". 
			"Author : "			. $row["book_auth"]."<br>".
			"Publisher : "		. $row["book_pub"]."<br>".
			"Category : "		. $row["book_cat"]."<br>".
			"<hr/>";
		}
	}
	else{
		echo "Book not found!";
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