<?php 
include("auth.php");

echo "<h1>Dashboard</h1>";
echo "
	<div>
		<a href='userinfo.php'>User Information</a><br/>
		<a href='books.php'>Book List</a><br/>
		<a href='book_category.php'>Book Categories</a><br/>
		<a href='logout.php'>Logout</a><br/>
	</div>
";

?>