<?php
    session_start();
    
    if(!isset($_SESSION['user'])){
        $_SESSION['user'] = "";
    }
    
    $user = $_SESSION['user'];
?>
<!DOCTYPE html>
<html>
	<head>
	<title>Article Posting</title>
	<link href="style.css" rel="stylesheet">
	</head>
	<body>
		<div id='welcome'>
			<div>
			<img src="serl.jpg" width="100px" height="70px" align="float:left">
			</div>
		<?php
	        if($user != ""){
	            echo "<p>Welcome, $user    <a href='admin.php'>Dashboard</a>    <a href='logout.php'>Logout</a>     <a href='postarticle.php'>Add Article</a></p>";
	        }
	    ?>
	    </div>
		<div class="webpage">
			<div class="menu">
				<div class="links"><a href="index.php">Home</a></div>
				<div class="links"><a href="login.php">Log In</a></div>
				<div class="links"><a href="searchform.php">Search for a Document</a></div>
				<div class="links"><a href="about.php">About this Website</a></div>
			</div>
			<div class="content">
				<div id="index">
				<h1>Article Posting Form</h1>
				<hr>

	<?php
	//Function to check article title length.
	function checkArticleTitleLength($strLength)	{
		if (strlen($strLength) == 20)	{
			return TRUE;
		} 
	}

	//Function to check there are no illegal characters in article.
	function checkArticleCharacters($stri)	{
		if(preg_match('/^[!?\.\,a-z0-9 ]+$/i', $stri))	{
			return TRUE;
		}
	}
	
	//Function to check status is not null.
	function checkNotNull($stri)	{
		if(!$stri == '')	{
			return TRUE;
		}
	}

	$articleTitle =$_POST["articleTitle"];
	$article =$_POST["article"];

	//Retrieve the database values located in settings.php
	require_once ("connect.php");
	
	// Create connection
    $db = mysqli_connect($servername, $username, $password, $database, $dbport) or die(mysql_error());

	//Checks if article title is unique via a query on the database.
	$searchCode = <<<SQLBLOCK
	SELECT title FROM artTable WHERE title='$articleTitle';
SQLBLOCK;

	$queryinSearch =@mysqli_query($db, $searchCode);
	$countofRows =$queryinSearch->num_rows;
	
	//Function to check if the article title is unique or already used.
	function checkIfArticleTitleExists($RowsReturned)	{
		if ($RowsReturned > 0)	{
		return FALSE;
	}
	else	{
		return TRUE;}
	}
	
	$tableQuery = <<<SQLBLOCK
	insert into artTable (title, article) values ('$articleTitle','$article');
SQLBLOCK;
	
	//Checks all conditions return true and returns a message saying the article was posted.
	if	((checkArticleTitleLength($articleTitle) == TRUE) &&
		(checkArticleCharacters($article) == TRUE) &&
		(checkIfArticleTitleExists($countofRows) == TRUE))	{
		mysqli_query($db, $tableQuery);
		echo "<p>Your article has been saved</p>";
	}
	
	//Closes the connection and provides links to create another status or to main page.
	//mysqli_close($db);
	echo "<p><a href='postarticle.php'>Add Another Article.</a></p>";
	echo "<p><a href='index.php'>Back to Main Page.</a></p>";
	?>
	</div>
	</div>
	</div>
	</body>
</html>
