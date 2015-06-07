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
	<title>Article Search</title>
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
		<h1>Article Search</h1>
		<hr>
		<p id="page stuff"></p>
		<table>
			<tr>
				<th>Title</th>
				<th>Author</th>
				<th>Journal</th>
				<th>Year</th>
				<th>Methodology</th>
				<th>Practice</th>
				<th>Research Method</th>
				<th>Credibility</th>
				<th>Confidence</th>
				<th>PDF</th>
			</tr>
			<tr>
				<td>TDD is Cool</td>
				<td>TDD Guy</td>
				<td>Journal of TDD</td>
				<td>2013</td>
				<td>TDD</td>
				<td>*Placeholder*</td>
				<td>Something</td>
				<td>4</td>
				<td>5</td>
				<td><a href="downloadpdf">TDD PDF</a></td>
			</tr>
		</table>
		<br>
		<a href="savesearch.php">Save the Search</a><br>
		<a href="ratesearch.php">Rate the Search</a><br>
		<a href="searchform.php">Another Search</a><br>
		<?php
		
// 			$title = $_GET["title"]; 		//bib
// 			$author = $_GET["author"];		//bib
// 			$journal = $_GET["journal"];	//bib
// 			$minyear = $_GET["minyear"];	//bib
// 			$maxyear = $_GET["maxyear"];	//bib
// 			$meth = $_GET["methodology"];	//meth
// 			$practice = $_GET["practice"];	//prac
// 			$research = $_GET["research"]; 	//bib
// 			$mincred = $_GET["mincred"];	//rat
// 			$maxcred = $_GET["maxcred"];	//rat
// 			$minconf = $_GET["minconf"];	//rat
// 			$maxconf = $_GET["maxconf"];	//rat
			
// 			$tables = "";
// 			$columns = "";
// 			$where = "";
			
// 			$selectQuery =<<<SQLBLOCK
// 			SELECT $column FROM $tables WHERE $where;
// SQLBLOCK;
			
// 			//Conditions to check each part of form to fill out query to be submitted to database for retrieval
// 			//trust me when i say it works, also dont touch. 
// 			function select(){
// 				if(!$title.empty()){
// 					$columns .= "title";
// 					$tables .= "Bibliography";
// 					if(!$author.empty() or !$journal.empty() or (!$minyear.empty() and !$maxyear.empty()) or !$research.empty() or !$meth.empty() or !$practice.empty() or (!$mincred.empty() and !$maxcred.empty()) or (!$conf.empty() and !$maxconf.empty())) {
// 						$column .= ", ";
// 						$tables .= ", ";
// 					}
// 				}
// 				if(!$author.empty()){
// 					$columns .= "authors";
// 					if(!$journal.empty() or (!$minyear.empty() and !$maxyear.empty()) or !$research.empty() or !$meth.empty() or !$practice.empty() or (!$mincred.empty() and !$maxcred.empty()) or (!$conf.empty() and !$maxconf.empty())) {
// 						$columns .= ", ";
// 					}
// 				}
// 				if(!$journal.empty()){
// 					$columns .= "journal";
// 					if(!$journal.empty() or (!$minyear.empty() and !$maxyear.empty()) or !$research.empty() or !$meth.empty() or !$practice.empty() or (!$mincred.empty() and !$maxcred.empty()) or (!$conf.empty() and !$maxconf.empty())) {
// 						$columns .= ", ";
// 					}
// 				}
// 				if(!$minyear.empty() and !$maxyear.empty()){
// 					$columns .= "year";
// 					if(!$research.empty() or !$meth.empty() or !$practice.empty() or (!$mincred.empty() and !$maxcred.empty()) or (!$conf.empty() and !$maxconf.empty())) {
// 						$columns .= ", ";
// 					}
// 				}
// 				if(!$research.empty()){
// 					$columns .= "researchlvl";
// 					if(!$meth.empty() or !$practice.empty() or (!$mincred.empty() and !$maxcred.empty()) or (!$conf.empty() and !$maxconf.empty())) {
// 						$columns .= ", ";
// 					}
// 				}
// 				if(!$meth.empty()){
// 					$columns .= "meth";
// 					$tables .= "Methodology";
// 					if(!$practice.empty() or (!$mincred.empty() and !$maxcred.empty()) or (!$conf.empty() and !$maxconf.empty())) {
// 						$columns .= ", ";
// 					}
// 				}
// 				if(!$practice.empty()){
// 					$columns .= "practice";
// 					$tables .= "Practices";
// 					if((!$mincred.empty() and !$maxcred.empty()) or (!$conf.empty() and !$maxconf.empty())) {
// 						$columns .= ", ";
// 					}
// 				}
// 				if(!$mincred.empty() and !$maxcred.empty()){
// 					$columns .= "credibility";
// 					$tables .= "Ratings";
// 					if(!$conf.empty() and !$maxconf.empty()) {
// 						$columns .= ", ";
// 					}
// 				}
// 				if(!$conf.empty() and !$maxconf.empty()){
// 					$columns .= "confidence";
// 				}
// 			}
			
// 			//trust me when i say it works, also dont touch
// 			function where(){
// 				if(!$title.empty()){
// 					$where .= "title LIKE '%$title'";
// 					if(!$author.empty() or !$journal.empty() or (!$minyear.empty() and !$maxyear.empty()) or !$research.empty() or !$meth.empty() or !$practice.empty() or (!$mincred.empty() and !$maxcred.empty()) or (!$conf.empty() and !$maxconf.empty())) {
// 						$where .= " AND ";
// 					}
// 				}
// 				if(!$author.empty()){
// 					$where .= "authors LIKE '%$author'";
// 					if(!$journal.empty() or (!$minyear.empty() and !$maxyear.empty()) or !$research.empty() or !$meth.empty() or !$practice.empty() or (!$mincred.empty() and !$maxcred.empty()) or (!$conf.empty() and !$maxconf.empty())) {
// 						$where .= " AND ";
// 					}
// 				}
// 				if(!$journal.empty()){
// 					$where .= "journal LIKE '%$journal'";
// 					if(!$journal.empty() or (!$minyear.empty() and !$maxyear.empty()) or !$research.empty() or !$meth.empty() or !$practice.empty() or (!$mincred.empty() and !$maxcred.empty()) or (!$conf.empty() and !$maxconf.empty())) {
// 						$where .= " AND ";
// 					}
// 				}
// 				if(!$minyear.empty() and !$maxyear.empty()){
// 					$where .= "year >= $minyear AND year <= $maxyear";
// 					if(!$research.empty() or !$meth.empty() or !$practice.empty() or (!$mincred.empty() and !$maxcred.empty()) or (!$conf.empty() and !$maxconf.empty())) {
// 						$where .= " AND ";
// 					}
// 				}
// 				if(!$research.empty()){
// 					$where .= "researchlvl = $research";
// 					if(!$meth.empty() or !$practice.empty() or (!$mincred.empty() and !$maxcred.empty()) or (!$conf.empty() and !$maxconf.empty())) {
// 						$where .= " AND ";
// 					}
// 				}
// 				if(!$meth.empty()){
// 					$where .= "meth = $meth";
// 					if(!$practice.empty() or (!$mincred.empty() and !$maxcred.empty()) or (!$conf.empty() and !$maxconf.empty())) {
// 						$where .= " AND ";
// 					}
// 				}
// 				if(!$practice.empty()){
// 					$where .= "practice = $meth";
// 					if((!$mincred.empty() and !$maxcred.empty()) or (!$conf.empty() and !$maxconf.empty())) {
// 						$where .= " AND ";
// 					}
// 				}
// 				if(!$mincred.empty() and !$maxcred.empty()){
// 					$where .= "credibility >= $mincred AND credibility <= $maxcred";
// 					if(!$conf.empty() and !$maxconf.empty()) {
// 						$where .= " AND ";
// 					}
// 				}
// 				if(!$conf.empty() and !$maxconf.empty()){
// 					$where .= "confidence >= $minconf AND confidence <= $maxconf";
// 				}
// 			}
			
// 			//Retrieve the database values located in connect.php
// 			require_once ("connect.php");
// 			// Create connection
// 		    $db = mysqli_connect($servername, $username, $password, $database, $dbport) or die(mysql_error());
			
// 			select();
			
// 			where();
			
// 			//use the query to search database in order to save for user in future
// 			$saveQuery = $selectQuery;
			
// 			$resultSearch =@mysqli_query($db, $selectQuery);
			
			
// 			//Displays the result of the users entered query.
// 			while($row =mysqli_fetch_array($resultSearch))	{
// 				echo "<p>Article Title: ".$row['title']."<br/>";
// 				echo "Author: ".$row['authors']."</p>";
// 				echo "Year: ".$row['year']."<br>";
// 				echo "Journal: ".$row['journal']."<br>";
// 				echo "Methodology Used: ".$row['meth']."<br>";
// 				echo "Practice: ".$row['practice']."<br>";
// 				echo "Credibility Rating: ".$row['credibility']."<br>";
// 				echo "Confidence Rating: ".$row['confidence']."<br>";
// 				echo "<hr><br>";
// 				}
		
// 			//Closes the connection.
// 			mysqli_close($db);
			
// 			//Provides links to search for another status, or return to main page
// 			echo "<p><a href='searchform.php'>Search again?</a></p>";
// 			echo "<p><a href='ratesearch.php'>Would you like to rate the articles found?</a></p>";
// 			echo "<p><a href='savesearch.php'>Save your results for later?</a></p>";
// 			echo "<p><a href='index.php'>Back to Main Page.</a></p>";
		?>
	</div>
	</div>
	</div>
	</body>
</html>
