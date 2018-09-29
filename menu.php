<?php  
	session_start();
	if(isset($_SESSION['u_id'])) {
		$x=1;
	} else {
		header("Location /hackaton/menu.php");
		exit();
	}
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
	<style>
		.fundo{
			background-color: #CCC;
		}
		.divisao{
			background-color: #C0C0C0;
			height: 900px;
			width: 400px;
		}
		.font{
			font-family: arial;
			font-size: 45px;
		}
	</style>
	<title>ABATE CHIQ</title>
</head>
<body class="fundo">
	<header>
		<div class="principal">
			<nav>
				<div>
					<ul>
						<li><a href="mortalidadepagina.php">Ficha de mortalidade</a></li>
					</ul>
				</div>
				<div class="nav-login">
					<form action="includes/logout.inside.php" method="POST">
						<button type="submit" name="submit">Logout</button>
					</form>
				</div>
			</nav>
		</div>
	</header>	
</body>
</html>