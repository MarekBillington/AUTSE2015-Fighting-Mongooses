<!DOCTYPE html>
<html>
	<head>
	<title>Article Posting</title>
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
	<h1>Article Posting Form</h1>
	<hr>

	<?php
	
	$docName =$_POST["docName"];
	
	$author =$_POST["author"];
	
	$docUpload =$_POST["docUpload"];
	
	require_once("connect.php");
	
	$db = mysqli_connect($servername, $username, $password, $database, $dbport) or die(mysql_error());
	
	$query = "INSERT INTO docTable (title, author, docs) values ('$docName', '$author', '$docUpload')";
	
	mysqli_query($db, $query);
	
	echo $query;
	echo "<p><a href='postarticle.php'>Post another Document.</a></p>";
	echo "<p><a href='index.php'>Back to Main Page.</a></p>";
	?>
	</div>
	</div>
	</div>
	</body>
</html>
