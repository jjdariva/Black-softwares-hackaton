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
	<div class="principal">
		<nav>
			<ul>
				<li><a href="# Futuros links #">ajbcdabcv adgjvdcv</a></li>
			</ul>
			<div class="nav-login">
				<form = action="includes/logoutc.php" method="POST">
					<button type="submit" name="submit">Logout</button>
				</form>
			</div>
		</nav>
	</div>		
	<div class="divisao">
		<p></p>
	</div>
</body>
</html>