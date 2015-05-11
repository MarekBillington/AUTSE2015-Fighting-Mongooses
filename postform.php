<!DOCTYPE html>
<html>
	<head>
	<title>SERLER</title>
	<link href="style.css" rel="stylesheet">
	</head>
	<body>
			<div class="webpage">
			<div class="menu">
				<div class="links"><a href="index.php">Home</a></div>
				<div class="links"><a href="postform.php">Upload a document</a></div>
				<div class="links"><a href="searchform.php">Search for a document</a></div>
				<div class="links"><a href="postarticle.php">Write a new article</a></div>
			</div>
			<div class="content">
				<div id="index">
      		<h1>Document Upload</h1>
      		<hr>
      		<form action="postformprocess.php" method="POST" enctype="multipart/form-data">
      			<!--An input field for a document name, required with each status-->
      			<label>Document Name (required): <input type="text" name="docName"/></label><br>
      			<label>Author(s): <input type="text" name="author" /></label><br>
      			<label>Document Upload: <input type="file" name="docUpload" /></label><br>
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
