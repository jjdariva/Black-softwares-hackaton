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
				<li><a href="/index.php">Home</a></li>
			</ul>
			<div class="nav-login">
				<form action="includes/login.inside.php" method="POST">
					<input type="text" name="username" placeholder="Usuário">
					<input type="password" name="pwd" placeholder="Senha">
					<button type="submit" name="submit">Login</button>
				</form>
</body>				
</html>