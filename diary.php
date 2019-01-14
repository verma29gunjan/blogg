<?php include('server.php')?>
<!DOCTYPE html>
<html>
<head>
	<title>User registeration page</title>
	<link rel="stylesheet" type="text/css" href="style1.css">
</head>
<body>
	
	<div class="header1">
		<h2>!!__Diary__!!</h2>
	</div>
	<form method="POST" action="diary.php" >
			<div class="diary">
			<label>How was your day:</label>
			<input type="text"name="theme" placeholder="write your text here">	
		</div>	
		<div class="description">
			<label>Description:</label>
			<input type="text" name="description"placeholder="describe here">	
		</div>
		<div >
			<button type="submit" name="personal1" class="btn">Done
			</button>
		</div>
		
		</p>		
	</form>
</body>
</html>