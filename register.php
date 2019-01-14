<?php include('server.php')?>
<!DOCTYPE html>
<html>
<head>
	<title>User registeration page</title>
	<link rel="stylesheet" type="text/css" href="style1.css">
</head>
<body>
	
	<div class="header">
		<h2>Register</h2>
	</div>
	<form method="POST" action="register.php" >
			<div class="input-group">
			<label>Username</label>
			<input type="text"name="username" placeholder="enter name" value="<?php echo $username;?>" required="username">	
		</div>	
		<div class="input-group">
			<label>Email</label>
			<input type="text" name="email"placeholder="email" value="<?php echo $email;?>" required="email">	
		</div>
		<div class="input-group">
			<label>Password</label>
		<input type="password" name="password_1"placeholder="enter password" required="password">			
		</div>
		<div class="input-group">
			<label>Confirm Password</label>
		<input type="password" name="password_2"placeholder="re-enter password" required="password">			
		</div>
		<div class="input-group">
			<button type="submit" name="register" class="btn">Register
			</button>
		</div>
		<p>
			Already a member? <a href="login.php">Sign in</a>
		</p>		
	</form>
</body>
</html>