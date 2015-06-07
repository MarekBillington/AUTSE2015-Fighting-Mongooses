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
	            <div id="admin">
	                <h1>Admin Page</h1>
	                <hr>
	                <h2>Users to be approved</h2>
	                <form>
	                <table>
	                    <tr>
	                        <th>Name</th>
	                        <th>Role</th>
	                        <th>Approve</th>
	                    </tr>
	                    <tr>
	                        <td>Marek</td>
	                        <td>Moderator</td>
	                        <td><input type="checkbox" name="user" value="Moderator"></td>
	                    </tr>
	                </table>
	                <br>
	                <h2>Papers to be approved</h2>
	                <table>
	                    <tr>
	                        <th>Title</th>
	                        <th>Authors</th>
	                        <th>Contributor</th>
	                        <th>Approve</th>
	                    </tr>
	                    <tr>
	                        <td>TDD is cool</td>
	                        <td>TDD guy</td>
	                        <td>Jim</td>
	                        <td><input type="checkbox" name="paper" value="paper"></td>
	                    </tr>
	                </table>
	                <br>
	                <input type="submit" value="Approve">
	                </form>
                </div>
            </div>
        </div>
    </body>
</html>
