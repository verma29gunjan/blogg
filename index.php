<?php include("server.php")  ?>
<!DOCTYPE html>
<html>
<head>
	<title>User page</title>
	<link rel="stylesheet" type="text/css" href="style1.css">
</head>
<body>
	
	<div class="header">
		<h2>Home Page</h2>
	</div>
	<div class="content">
		<?php if (isset($_SESSION['success'])):?>
			<div class="success">
				<h3>
					<<?php 
						echo $_SESSION['success'];
						unset($_SESSION['success']);
					 ?>

				</h3>				
			</div>
		<?php endif ?>
		<?php if (isset($_SESSION['username'])): ?>
			<div><p>Welcome <strong><?php echo $_SESSION['username'] ?></strong>
			<div><br><br>
			<p><a href="diary.php">wanna write about your day</a></p>
			</strong></p>
			<br><br>
			<p><a href="register.php?logout='1'" style="color:red;">Logout</a></p>

		<?php endif ?>	
	</div>
	</body>
</html>