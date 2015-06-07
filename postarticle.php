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
	<title>SERLER</title>
	<link href="style.css" rel="stylesheet">
	</head>
	<body>
		<div id='welcome'>
			<div>
			<img src="serl.jpg" width="100px" height="70px" align="float:left">
			</div>
		<?php
	        if($user != ""){
	            echo "<p>Welcome, $user    <a href='admin.php'>Dashboard</a>    <a href='logout.php'>Logout</a>    <a href='postarticle.php'>Add Article</a></p>";
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
		<h1>Article Upload</h1>
		<hr>
		<form action="postarticleprocess.php" method="POST">
			<u>Article information</u><br>			
			<!--An input field for a title, required with each article-->
			<label>Article Title: <input type="text" name="articleTitle"/></label><br>
			<!--An input field for an author, required with each article-->
			<label>Author(s): <input type="text" name="author"/></label><br>
			<!--An input field for the journal where the article was found-->
			<label>Journal: <input type="text" name="journal"></label><br>
			<!--An input field the user can add the year the journal was published into-->
			<label>Year Published: <input type="text" name="year"/></label><br>
			<br>
			
			<br>
			<u>Research Level</u><br>			
			<!--An drop down box for the research level, required with each article-->
			<select>
  				<option value="level1">Level I</option>
  				<option value="level2">Level II</option>
  				<option value="level3">Level III</option>
  				<option value="level4">Level IV</option>
  				<option value="level5">Level V</option>
  				<option value="level6">Level VI</option>
  				<option value="level7">Level VII</option>
			</select> 
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
