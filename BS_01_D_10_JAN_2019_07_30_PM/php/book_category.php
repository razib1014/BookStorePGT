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
include ('auth.php');

echo "<h1>Book Categoies</h1>";

echo "
<table id='dash_table'>
	<tr id='dash_table_row'>
		<td id='dash_table_col'>
			<a href='books_show.php?cat=drama' class='dash_a'>Drama</a>
		</td></tr>

	<tr id='dash_table_row'>
		<td id='dash_table_col'>
			<a href='books_show.php?cat=romance' class='dash_a'>Romance</a>
		</td></tr>
			
	<tr id='dash_table_row'>
		<td id='dash_table_col'>
			<a href='books_show.php?cat=action' class='dash_a'>Action</a>
		</td></tr>
		
	<tr id='dash_table_row'>
		<td id='dash_table_col'>
			<a href='books_show.php?cat=adventure' class='dash_a'>Adventure</a>
		</td></tr>

	<tr id='dash_table_row'>
		<td id='dash_table_col'>
			<a href='books_show.php?cat=history' class='dash_a'>History</a>
		</td></tr>

	<tr id='dash_table_row'>
		<td id='dash_table_col'>
			<a href='books_show.php?cat=tragiccomedy' class='dash_a'>Tragic Comedy</a>
		</td></tr>
		
	<tr id='dash_table_row'>
		<td id='dash_table_col'>
			<a href='books_show.php?cat=youngfiction' class='dash_a'>Young Fiction</a>
		</td></tr>
			
	<tr id='dash_table_row'>
		<td id='dash_table_col'>
			<a href='books_show.php?cat=thriller' class='dash_a'>Thriller</a>
		</td>
	</tr>
</table>";

include('bttm.php');

?>

</div>
</div>

<div id="dv_foot">
		<p>Foot</p>
	</div>

</body>
</html>
