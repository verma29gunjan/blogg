<?php include("server.php") ?>

<!DOCTYPE html>
<html>
<head>
	<title>User login page</title>
	<link rel="stylesheet" type="text/css" href="style1.css">
</head>
<body>
	<div class="header">
		<h2>Login</h2>
	</div>
	<form method="post" action="login.php">
		<div class="input-group">
			<label>Username</label>
			<input type="text"name="username" placeholder="enter name" required>	
		</div>	
		<div class="input-group">
			<label>Password</label>
		<input type="password" name="password_1"placeholder=" password" required>			
		</div>
		<div class="input-group">
			<button type="submit" name="login" class="btn">login
			</button>
		</div>
		<p>
			Not yet a member? <a href="register.php">Sign up</a>
		</p>		
	</form>
</body>
</html>
<?php 
	$sqli = "SELECT id FROM users WHERE username = 'username' and password = 'password_1'";
      $result = mysqli_query($dbcon,$sqli);
      $row = mysqli_fetch_array($result,MYSQLI_BOTH)
      
?>