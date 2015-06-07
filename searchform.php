<?php
    session_start();
    
    if(!isset($_SESSION['user'])){
        $_SESSION['user'] = "";
    }
    
    if(!isset($_SESSION['search'])){
        $_SESSION['search'] = "";
    }
    
    $search = $_SESSION['search'];
    
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
					<h1>Search</h1>
					<hr>
					<form action="searchformprocess.php" method="GET">
						<!--Input field for the users search query-->
						<label>Search Title: <input type="text" name="title" /></label><br>
						<label>Search Author: <input type="text" name="author" /></label><br>
						<label>Search Journal: <input type="text" name="journal" /></label><br>
						<label>Search Year: <input type="number" name="minyear" min="1900" max="2015" value=""/> <input type="number" name="maxyear" min="1900" max="2015" value=""/></label><br>
						<label>Search Methodology: <select name="methodology">
							<option value="blank">-</option>
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
						</select></label><br>
						<label>Search Practice: <select name="practice">
							<option value="blank">-</option>
			  				<option value="practice1">Placeholder</option>
			  				<option value="practice2">Placeholder</option>
			  				<option value="practice3">Placeholder</option>
			  				<option value="practice4">Placeholder</option>
						</select></label><br>
						<label>Search Research Level: 
							<select name="research">
							<option value="blank">-</option>
			  				<option value="level1">Level I</option>
			  				<option value="level2">Level II</option>
			  				<option value="level3">Level III</option>
			  				<option value="level4">Level IV</option>
			  				<option value="level5">Level V</option>
			  				<option value="level6">Level VI</option>
			  				<option value="level7">Level VII</option>
						</select></label><br>
						<label>Search Credibility: <input type="number" name="mincred" min="0" max="5" value=""/> - <input type="number" name="maxcred" min="0" max="5" value=""/></label><br>
						<label>Search Confidence: <input type="number" name="minconf" min="0" max="5" value=""/> - <input type="number" name="maxconf" min="0" max="5" value=""/></label><br>
						<!--Button to submit users query-->
						<input type="submit" value="Search">
					</form>
					
					<?php
						if($search != ""){
							echo "<p>Here are your previous searches:<br><a href='searchformprocess.php'>$search</a>";
						}
					?>
				</div>
			</div>
		</div>
	</body>
</html>
