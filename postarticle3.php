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
		<form action="postarticleprocess3.php" method="POST">
			<u>Evidence</u><br>
			<!--An input field for the user to describe the benefits/outcomes-->
			<label>Benefits/Outcomes: <input type="text" name="benefits"/></label><br>
			<!--An input field for the user to describe the context-->
			<label>Context of Study: <input type="text" name="context"/></label><br>
			<!--An input field for the user to write the result-->
			<label>Result of Study: <input type="text" name="result"/></label><br>
			<!--An input field for the user to write the integrity-->
			<label>Integrity of Implementation: <input type="text" name="integrity"/></label><br>
			<!--A select box for the confidence rating-->
		
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
