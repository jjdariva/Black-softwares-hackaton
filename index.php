<?php  
	session_start()
?>

<!DOCTYPE html>
<html>
<head>
	<title>Abatechix</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<header>
	<div class="principal">
		<nav>
			<ul>
				<li><a href="index.php">Home</a></li>
			</ul>
			<div class="nav-login">
				<form action="includes/loginc.php" method="POST">
					<input type="text" name="username" placeholder="Username">
					<input type="password" name="pwd" placeholder="Password">
					<button type="submit" name="submit">Login</button>
					<a href="signup.php">Sign up</a>
				</form>
</body>				
</html>