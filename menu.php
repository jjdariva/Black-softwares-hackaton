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

	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">

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
	<style>
	{
	    margin: 0;
	}

ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    width: 25%;
    background-color: #f1f1f1;
    position: fixed;
    overflow: auto;
    float: left;
}

li a {
    display: block;
    color: #000;
    padding: 8px 16px;
    text-decoration: none;
    float: left;
}

li a.active {
    background-color: #4CAF50;
    color: white;
    transition-duration: 0.2s;
    float: left;
}

li a:hover:not(.active) {
    background-color: #555;
    color: white;
    transition-duration: 0.2s;
    float: left;
}
.button{
    background-color: white;
    color: black;
    border: 2px solid #555555;
    height: 50px;
    width: 90px;
    font-size: 25px;
}

.button:hover {
    background-color: #555555;
    color: white;
    height: 50px;
    width: 90px;
    font-size: 25px;
    transition-duration: 0.3s;
}
</style>
</head>
<body class="fundo">
	<header>

        <div class="principal">
            <nav>
            	<div class="nav-login">
                    <form action="includes/logout.inside.php" method="POST">
                        <button type="submit" name="submit" class="button">Sair</button>
                    </form>
                    <img src="logo4.png" height="78.571" width="238.095">
                    <input type="button"> Menu 
                </div>
                <br><br><br><br><br>
                <div>
                    <ul>
					  </li><br><br><br><br><br>
					  <li><a href="mortalidadepagina.php">Ficha de mortalidade</a></li>
					  <li><a href="peso.php">Ficha de Peso</a></li>
					  <li><a href="racao.php">Ficha de ração</a></li>
					</ul>
                </div>
            </nav>
        </div>
    </header>		

		<div class="principal">
		</div>
	</header>	

</body>
</html>