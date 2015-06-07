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
		<form action="postarticleprocess4.php" method="POST">
            <u>Research Design Information</u><br>  
            <!--An input field the user can input the research question-->
            <label>Research Question: <input type="text" name="question"/></label><br>
            <!--An input field the user can input the research method-->
            <label>Research Method: <input type="text" name="method"/></label><br>
            <!--An input field the user can input the research metrics-->
            <label>Research Metrics: <input type="text" name="metrics"/></label><br>
            <!--A drop down box the user can select the nature of particpants-->
            <label>Nature of Participants: <select>
  				<option value="nature1">Placeholder</option>
  				<option value="nature2">Placeholder</option>
  				<option value="nature3">Placeholder</option>
	  			<option value="nature4">Placeholder</option>
	  			<option value="nature5">Placeholder</option>
			</select></label><br> 
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
