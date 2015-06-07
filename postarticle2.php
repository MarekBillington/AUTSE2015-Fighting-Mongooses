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
		<form action="postarticleprocess2.php" method="POST">
			<u>Methodology</u><br>
			<!--A drop down box for the user to select a methodology-->
			<select name="methodology">
  				<option value="agile">Agile</option>
  				<option value="crystal">Crystal Methods</option>
  				<option value="dynamicSystems">Dynamic Systems</option>
	  			<option value="extreme">Extreme Programming</option>
	  			<option value="featureDriven">Feature Driven</option>
	  			<option value="leanDevelopment">Lean Development</option>
	  			<option value="rup">Rational Unified Process</option>
	  			<option value="scrum">Scrum</option>
	  			<option value="spiral">Spiral</option>
	  			<option value="SDLC">Systems Development Life Cycle</option>
	  			<option value="waterfall">Waterfall</option>
			</select><br> 
			<!--A description of the selected methodology-->
			<label>Description: </label><br>
			<br>
			<u>Practice</u><br>
			<select name="practice">
  				<option value="practice1">Placeholder</option>
  				<option value="practice2">Placeholder</option>
  				<option value="practice3">Placeholder</option>
  				<option value="practice4">Placeholder</option>
			</select><br>
			<label>Description: </label><br>
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
