
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
	            <div id="login">
	                <h1>Login</h1><hr>
	                <form action="loginprocess.php" method="POST">
	                    <label>Username: <input type="text" name="username"></label><br>
	                    <label>Password: <input type="password" name="password"></label><br>
	                    <input type="submit" value="Login">
	                </form>
	                
	            </div>
            </div>
        </div>
    </body>
</html>
