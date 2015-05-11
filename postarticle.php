<!DOCTYPE html>
<html>
	<head>
	<title>SERLER</title>
	<link href="style.css" rel="stylesheet">
	</head>
	<body>
			<div class="webpage">
			<div class="menu">
				<div class="links"><a href="index.php">Home</a></div>
				<div class="links"><a href="postform.php">Upload a document</a></div>
				<div class="links"><a href="searchform.php">Search for a document</a></div>
				<div class="links"><a href="postarticle.php">Write a new article</a></div>
			</div>
			<div class="content">
				<div id="index">
		<h1>Article Writer</h1>
		<hr>
		<form action="postarticleprocess.php" method="POST">
			<!--An input field for a title, required with each article-->
			<label>Article Title: <input type="text" name="articleTitle"/></label><br>
			<!--An input field for an author, required with each article-->
			<label>Author: <input type="text" name="author"/></label><br>
			<!--An input field for the date uploaded-->
			<label>Date: <input type="date" name="date"></label><br>
			<!--An input field the user can write their article into-->
			<label>Article: <input type="text" name="article"/></label><br>
			<!--An input field the user can add evidence to their article-->
			<label>Evidence: <input type="text" name="evidence"/></label>
			<br>
			<br>
			<!--Buttons to confirm the choices made, or redo-->
			<input type="submit" value="Post">
			<input type="reset" value="Reset">
		</form>
		<br>
		</div>
		</div>
		</div>
	</body>
</html>
