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
        <title>Rate Articles</title>
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
                <form>
                    <u>Credibility</u><br>
                    <label>Rating: <input type='number' name='rating' min='1' max='5'/></label><br>
                    <label>Reason for Rating: <input type='text' name='ratingReason'/></label><br>
                    <label>Ratee: <input type='text' name='ratee'/></label><br>
                    <u>Evidence</u><br>
                    <label>Confidence Rating: <input type='number' name='confidenceRating' min='1' max='5'/></label><br>
                    <label>Reason for Rating: <input type='text' name='ratingReason'/></label><br>
                    <label>Ratee: <input type='text' name='ratee'/></label><br>
                </form>
                </div>
            </div>
        </div>
    </body>
</html>
