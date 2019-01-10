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

echo "<h1 style='text-align: center;'>Dashboard</h1>";

echo "
	<table id='dash_table'>
	<tr id='dash_table_row'>
		<td id='dash_table_col'><a href='userinfo.php' class='dash_a'>User Information</a></td>
	</tr>
	<tr id='dash_table_row'>
		<td id='dash_table_col'><a href='books.php' class='dash_a'>Book List</a></td>
	</tr>
	<tr id='dash_table_row'>
		<td id='dash_table_col'><a href='search.php' class='dash_a'>Book search</a></td>
	</tr>
	<tr id='dash_table_row'>
		<td id='dash_table_col'><a href='book_category.php' class='dash_a'>Book Categories</a></td>
	</tr>
	<tr id='dash_table_row'>
		<td id='dash_table_col'><a href='logout.php' class='dash_a'>Logout</a></td>
	</tr>
	</table>";

?>

</div>
	</div>

	<div id="dv_foot">
		<p>Foot</p>
	</div>
</body>
</html>