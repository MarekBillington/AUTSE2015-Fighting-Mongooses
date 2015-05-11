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
        		<h1>Search</h1>
        		<hr>
        		<form action="searchformprocess.php" method="GET">
        			<!--Input field for the users search query-->
        			<label><input type="text" name="search"></label>
        			<!--Button to submit users query-->
        			<input type="submit" value="Search">
        		</form>
        		<br>
        </div>
      </div>
    </div>
	</body>
</html>
