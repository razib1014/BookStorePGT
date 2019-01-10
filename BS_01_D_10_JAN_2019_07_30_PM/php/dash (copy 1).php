<?php include 'db/dbconn.php'; ?>
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
include("auth.php");

echo "<h1>Dashboard</h1>";
echo "
	<div>
		<a href='userinfo.php'>User Information</a><br/>
		<a href='books.php'>Book List</a><br/>
		<a href='search.php'>Book search</a><br/>
		<a href='book_category.php'>Book Categories</a><br/>
		<a href='logout.php'>Logout</a><br/>
	</div>
";

?>

</div>
	</div>

	<div id="dv_foot">
		<p>Foot</p>
	</div>
</body>
</html>