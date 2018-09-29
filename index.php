<?php  
	session_start();
	if(isset($_SESSION['u_id'])) {
		header("Location /hackaton/menu.php?jalogado");
		exit();
	} else {
		$x = "1";
	}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>ExPoul</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<header>	
	<div class="principal">
		<nav>
			<ul>
				<li><img src="logo4.png" height="78.571" width="238.095"></li>
				<li><a href="/hackaton/index.php">Home</a></li>
				<li><a href="/hackaton/sobre.php">Sobre</a></li>
			</ul>
			<div class="nav-login">
				
				<form action="includes/login.inside.php" method="POST">
					<input type="text" name="username" placeholder="Usuário">
					<input type="password" name="pwd" placeholder="Senha">
					<button type="submit" name="submit">Login</button>
				</form>
			</div>
		</nav>
	</div>
</header>
		<img src="pintostop.jpg" id="pinto" width="1900" height="860">
		<div id="rodape">
			<span>Black Softwares®: Todos os direitos reservados</span>
		</div>
</body>				
</html>