<!DOCTYPE html>
<html>
	<head>
	<title>Article Search</title>
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
					<h1>Article Search</h1>
					<hr>

	<?php
	//Checks that the search field wasn't empty, and returns an error if it was.
	if(isset($_GET["search"]) && !empty($_GET["search"]))	{
	//Retrieve the database values located in connect.php
	require_once ("connect.php");
	// Create connection
    $db = mysqli_connect($servername, $username, $password, $database, $dbport) or die(mysql_error());

	$searchArticle =$_GET["search"];

	$searchQuery = "SELECT * FROM artTable WHERE article LIKE '%$searchArticle%'"; 
	$resultSearch =@mysqli_query($db, $searchQuery);

	//Displays the result of the users entered query.
	while($row =mysqli_fetch_array($resultSearch))	{
		echo "<p>Article Title: ".$row['title']."<br/>";
		echo "Article: ".$row['article']."</p>";
		echo "<hr>";
	}

	//Closes the connection.
	//mysqli_close($db);
	}
	else	{
		echo "You have not specified a search.";
	}
	?>
	<!-- Provides links to search for another status, or return to main page -->
</div>
</div>
</div>
	</body>
</html>
