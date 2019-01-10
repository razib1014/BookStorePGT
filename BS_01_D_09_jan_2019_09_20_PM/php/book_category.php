<?php 
include ('db/dbconn.php');
include('auth.php');

echo "<h1>Book Categoies</h1>";

echo "
<table>
	<tr>
		<th>Categories</th>
	</tr>
	<tr>
		<td><a href='books_show.php?cat=drama'>Drama</a><br>
			<a href='books_show.php?cat=romance'>Romance</a><br>
			<a href='books_show.php?cat=action'>Action</a><br>
			<a href='books_show.php?cat=adventure'>Adventure</a><br>
			<a href='books_show.php?cat=history'>History</a><br>
			<a href='books_show.php?cat=tragiccomedy'>Tragic Comedy</a><br>
			<a href='books_show.php?cat=youngfiction'>Young Fiction</a><br>
			<a href='books_show.php?cat=thriller'>Thriller</a><br>
		</td>
	</tr>
</table>";

include('bttm.php');
?>