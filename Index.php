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
	<title>Assignment 1</title>
	<link href="style.css" rel="stylesheet">
	</head>
	<body>
		<div id='welcome'>
			<div>
			<img src="serl.jpg" width="100px" height="70px" align="float:left">
			</div>
		<?php
	        if($user != ""){
	            echo "<div align='float:left'><p>Welcome, $user    <a href='admin.php'>Dashboard</a>    <a href='logout.php'>Logout</a>    <a href='postarticle.php'>Add Article</a></p></div>";
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
		<h1>SERLER</h1>
		<hr>
		<p>
			Welcome to the Software Engineering Research Lab(SERLER) at AUT.<br>
			This repository has been created for the use of capturing evidence relating<br>
			to software development methods. The overarching goal of this system is to<br>
			support researchers and practitioners in decision-making during software projects.<br>
		<br>
		<br>
		</p>
		</div>
		</div>
		</div>
	</body>
</html>
